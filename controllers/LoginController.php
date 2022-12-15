<?php

include_once('models/User.php');
include_once('models/Database.php');
include_once('controllers/Controller.php');

class LoginController extends Controller {
    /**
     * Sanitize data, validate email and password
     * @param request: HTTP POST request
     */
    function validateData(Array $request) {
        $email_format = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
        $email = $this::sanitize($request['email']);
        $password = $this::sanitize($request['password']);

        if (!preg_match($email_format, $email)) {
            return array("Please enter a valid email");
        }

        $result = $this->validateCredentials($email, $password);
        return $result;
    }

    /**
     * Find user with the corresponding credentials and validate
     * @param email
     * @param password
     */
    function validateCredentials($email, $password) {
        $query = "SELECT * FROM users WHERE email = '{$email}'";
        $result = mysqli_query($this->getDatabase()->getConnection(), $query);

        if (!$result) {
            return array('Database error');
        }

        if (mysqli_num_rows($result) < 1) {
            return array('User does not exist');
        }

        $row = mysqli_fetch_assoc($result);
        $auth = password_verify($password, $row['password']);
        if (!$auth) {
            return array('Incorrect email or password');
        }

        $result = $this->login($row['uid']);
        return $result;
    }

    /**
     * Login user by setting user uid as session id
     * @param uid
     */
    function login($uid) {
        $_SESSION['uid'] = $uid;
        return header('location: home.php');
    }
} 
?>