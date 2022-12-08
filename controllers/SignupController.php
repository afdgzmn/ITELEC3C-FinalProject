<?php

include_once('models/User.php');
include_once('models/Database.php');

class SignupController {
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
     * Sanitize data, validate first name, last name, email, and password
     * @param request: POST request
     */
    function validateData(Array $request) {
        $email_format = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
        $password_format = "/^.*(?=.{8,20})(?=.*[a-z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@$!%*#?&)(^_=+-]).*$/";
        $errors = array();

        $first_name = $this->sanitize($request['first_name']);
        $last_name = $this->sanitize($request['last_name']);
        $email = $this->sanitize($request['email']);
        $password = $this->sanitize($request['password']);
        $confirm_password = $this->sanitize($request['confirm_password']);

        if (!preg_match($email_format, $email)) {
            array_push($errors, 
                "Please enter a valid email"
            );
        }
        
        if (!preg_match($password_format, $password)) {
            array_push($errors, 
                "Password must contain at least one number and one special character"
            );
        }

        if ($password != $confirm_password) {
            array_push($errors, 
                "Passwords do not match"
            );
        }

        if (!empty($errors)) {
            return $errors;
        }

        $user = new User(
            uniqid(),
            $first_name, 
            $last_name,
            2,
            $email,
            md5($password),
        );

        $result = $this->emailExists($user);
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
     * Checks if email is already taken
     * @param user: User object
     */
    function emailExists(User $user) {
        $users = $this->createUsersTable();
        if (!$users) {
            return array ("Database error");
        }

        $query = "SELECT * FROM users WHERE email = ?";
        $statement = mysqli_prepare($this->database->getConnection(), $query);

        $email = $user->getEmail();
        $statement->bind_param("s", $email);

        $result = $statement->execute();
        if (!$result) {
            return array("Database error");
        }

        $result = $statement->get_result();
        if (mysqli_num_rows($result) > 0) {
            return array("Email is already taken");
        }

        $result = $this->registerUser($user);
    }

    /**
     * Write data to database
     * @param user: User object
     * @param connection: Database connection
     */
    function registerUser(User $user) {
        $query = 
                "INSERT INTO users(uid, first_name, last_name, user_type, email, password) 
                VALUES(?, ?, ?, ?, ?, ?)";
            
        $statement = mysqli_prepare($this->database->getConnection(), $query);
        $statement->bind_param(
            "ssssss", 
            $user->getUid(), 
            $user->getFirstName(), 
            $user->getLastName(), 
            $user->getUserType(), 
            $user->getEmail(), 
            $user->getPassword()
        );

        $result = $statement->execute();
        if (!$result) {
            return array("Could not register user, please try again");
        } 

        session_start();
        $_SESSION['uid'] = $user->getUid();

        return header("location: home.php");
    }
} 
?>