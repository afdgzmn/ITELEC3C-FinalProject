<?php

include_once('models/Database.php');
include_once('controllers/Controller.php');

class Controller {
    private $database;

    function __construct() {
        $this->database = new Database();
    }

    function getDatabase() {
        return $this->database;
    }

    static function dd($data) {
        var_dump($data);
        die();
    }

    /**
     * Checks if user is logged in
     */
    static function isAuthenticated() {
        return (isset($_SESSION['uid'])) ? true : false;
    }

    /**
     * Returns cleaned data
     * @param data: Request data
     */
    static function sanitize(String $data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

?>