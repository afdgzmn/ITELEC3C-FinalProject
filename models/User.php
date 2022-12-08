<?php
class User {
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

    function getUid() {
        return $this->uid;
    }

    function getFirstName() {
        return $this->first_name;
    }

    function getLastName() {
        return $this->last_name;
    }

    function getUserType() {
        return $this->user_type;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }
}
?>