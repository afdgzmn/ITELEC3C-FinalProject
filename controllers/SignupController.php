<?php

require_once('models/User.php');
require_once('models/Database.php');
require_once('controllers/Controller.php');
require_once('interfaces/AuthInterface.php');

class SignupController extends Controller implements AuthInterface {
    /**
     * Sanitize data, validate first name, last name, email, and password
     * @param request: POST request
     */
    function validateData(Array $request) {
        $email_format = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
        $password_format = "/^.*(?=.{8,20})(?=.*[a-z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@$!%*#?&)(^_=+-]).*$/";
        $errors = array();

        $first_name = $this::sanitize($request['first_name']);
        $last_name = $this::sanitize($request['last_name']);
        $email = $this::sanitize($request['email']);
        $password = $this::sanitize($request['password']);
        $confirm_password = $this::sanitize($request['confirm_password']);

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

        $options = ['cost' => 12];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

        $user = new User(
            $first_name, 
            $last_name,
            1,
            $email,
            $hashed_password,
        );

        $result = $this->checkIfEmailExists($user);
        return $result;
    }

    /**
     * Checks if email is already taken
     * @param user: User object
     */
    function checkIfEmailExists(User $user) {
        $email = $user->getEmail();
        $query = "SELECT * FROM users WHERE email = '{$email}'";
        $result = mysqli_query($this->getDatabase()->getConnection(), $query);;

        if (!$result) {
            return array("Database error");
        }
        
        if (mysqli_num_rows($result) > 0) {
            return array("Email is already taken");
        }

        $result = $this->registerUser($user);
        return $result;
    }

    /**
     * Write user data to database
     * @param user: User object
     */
    function registerUser(User $user) {
        $query = 
                "INSERT INTO users(
                    first_name, 
                    last_name, 
                    user_type, 
                    email, 
                    password
                ) 
                VALUES(
                    '{$user->getFirstName()}', 
                    '{$user->getLastName()}', 
                    '{$user->getUserType()}', 
                    '{$user->getEmail()}', 
                    '{$user->getPassword()}'
                )";

        $result = mysqli_query($this->getDatabase()->getConnection(), $query);
        if (!$result) {
            return array("Could not register user, please try again");
        }
        
        $result = $this->fetchUser($user->getEmail());
        return $result;
    }

    /**
     * Fetch data after inserting data
     */
    function fetchUser($email) {
        $query = "SELECT * FROM users WHERE email = '{$email}'";
        $result = mysqli_query($this->getDatabase()->getConnection(), $query);

        if (!$result) {
            return array("Database error");
        }

        $row = mysqli_fetch_assoc($result);
        $result = $this->login($row["uid"], $row["user_type"]);
        return $result;
    }

    /**
     * Login user by setting user uid as session id
     * @param uid
     * @param usertype
     */
    function login($uid, $user_type) {
        $_SESSION['uid'] = $uid;
        $_SESSION["user_type"] = $user_type;
        return header("location: home.php");
    }
} 
?>