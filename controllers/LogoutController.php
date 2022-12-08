<?php

class LogoutController {
    /**
     * Logout user; destroy session
     */
    function logout() {
        session_start();
        session_destroy();
        header("location: home.php");
    }
} 
?>