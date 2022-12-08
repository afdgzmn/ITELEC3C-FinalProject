<?php

class HomeController {

    /**
     * Checks if user is logged in
     */
    function isAuthenticated() {
        return (isset($_SESSION['uid'])) ? true : false;
    }
} 
?>