<?php

abstract class AbstractUser {
    abstract function login();

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