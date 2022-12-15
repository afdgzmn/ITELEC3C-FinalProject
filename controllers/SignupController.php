<?php

include_once('models/User.php');
include_once('models/Database.php');
include_once('controllers/Controller.php');

class SignupController extends Controller {
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
            uniqid(),
            $first_name, 
            $last_name,
            2,
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
                    uid, 
                    first_name, 
                    last_name, 
                    user_type, 
                    email, 
                    password
                ) 
                VALUES(
                    '{$user->getUid()}', 
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

        $_SESSION['uid'] = $user->getUid();
        return header("location: home.php");
    }
} 
?>