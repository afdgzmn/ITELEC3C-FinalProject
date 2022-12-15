<?php

include_once('abstracts/AbstractUser.php');

class Admin extends AbstractUser {
    private $uid;
    private $first_name;
    private $last_name;
    private $user_type;
    private $email;
    private $password;

    function __construct($uid, $first_name, $last_name, $user_type, $email, $password) {
        $this->uid = $uid;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->user_type = $user_type;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Login user as admin by setting user uid as session id
     */
    function login() {
        $_SESSION['uid'] = $this->uid;
        return header('location: admin-home.php');
    }
}
?>