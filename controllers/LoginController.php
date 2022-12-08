<?php

include_once('models/User.php');
include_once('models/Database.php');

class LoginController {
    private $database;

    function __construct() {
        $this->database = new Database();
    }

    /**
     * Checks if user is logged in
     */
    function isAuthenticated() {
        session_start();
        if(isset($_SESSION['uid'])) {
            return header("location: home.php");
        }
    }

    /**
     * Returns cleaned data
     * @param data: Request data
     */
    function sanitize(String $data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * Sanitize data, validate email and password
     * @param request: POST request
     */
    function validateData(Array $request) {
        $email_format = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
        $errors = array();

        $email = $this->sanitize($request['email']);
        $password = $this->sanitize($request['password']);

        if (!preg_match($email_format, $email)) {
            return array("Please enter a valid email");
        }

        $result = $this->login($email, $password);
        return $result;
    }

    /**
     * Create users table
     */
    function createUsersTable() {
        $query = 
            'CREATE TABLE IF NOT EXISTS users(
                uid VARCHAR (255) NOT NULL,
                first_name VARCHAR (255) NOT NULL,
                last_name VARCHAR (255) NOT NULL,
                user_type INT (5) NOT NULL,
                email VARCHAR (255) NOT NULL,
                password VARCHAR (255) NOT NULL,
                PRIMARY KEY(uid)
            )';
        
        $result = mysqli_query($this->database->getConnection(), $query);
        return $result;
    }

    /**
     * Find user with the corresponding credentials
     * @param email
     * @param password
     */
    function login($email, $password) {
        $users = $this->createUsersTable();
        if (!$users) {
            return array ("Database error");
        }

        $query = "SELECT * FROM users WHERE email = ?";
        $statement = mysqli_prepare($this->database->getConnection(), $query);
        $statement->bind_param("s", $email);

        $result = $statement->execute();
        if (!$result) {
            return array("Database error");
        }

        $result = $statement->get_result();
        if (mysqli_num_rows($result) < 1) {
            return array("User does not exist");
        }

        $query = "SELECT * FROM users WHERE email = ? AND password = ?";
        $statement = mysqli_prepare($this->database->getConnection(), $query);

        $hashed_password = md5($password);
        $statement->bind_param("ss", $email, $hashed_password);

        $result = $statement->execute();
        if (!$result) {
            return array("Database error");
        }

        $result = $statement->get_result();
        if (mysqli_num_rows($result) < 1) {
            return array("Incorrect email or password");
        }

        $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

        session_start();
        $_SESSION['uid'] = $data['uid'];
        
        return header('location: home.php');
    }
} 
?>