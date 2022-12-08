<?php

class Database {
    private $DB_HOST = 'localhost';
    private $DB_USERNAME = 'itelec';
    private $DB_PASSWORD = 'mysql';
    private $DB_DATABASE = 'wecare';
    private $connection;

    function __construct() {
        $this->connection = mysqli_connect($this->DB_HOST, $this->DB_USERNAME, $this->DB_PASSWORD, $this->DB_DATABASE);
        if (!$this->connection) {
            die('Connection failed!');
        }
    }

    function getConnection(): Object {
        return $this->connection;
    }
}

?>