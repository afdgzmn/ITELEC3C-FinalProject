<?php

include_once('models/Database.php');

class OurDoctorsController {
    private $database;

    function __construct() {
        $this->database = new Database();
    }

    /**
     * Checks if user is logged in
     */
    function isAuthenticated() {
        return (isset($_SESSION['uid'])) ? true : false;
    }

    /**
     * Create doctors table
     */
    function createDoctorsTable() {
        $query = 
            'CREATE TABLE IF NOT EXISTS doctors(
                uid VARCHAR (255) NOT NULL,
                first_name VARCHAR (255) NOT NULL,
                last_name VARCHAR (255) NOT NULL,
                primary_specialization VARCHAR (255),
                secondary_specialization VARCHAR (255),
                local_number INT (10),
                mobile_number VARCHAR (255),
                secretary VARCHAR (255),
                clinic_location VARCHAR (255),
                PRIMARY KEY(uid)
            )';
    
        $result = mysqli_query($this->database->getConnection(), $query);
        return $result;
    }

    function createDoctors() {
        $query = 
            "INSERT INTO doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location) 
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $statement = mysqli_prepare($this->database->getConnection(), $query);

        for ($i = 0; $i < 2; $i++) {
            $statement->bind_param(
                "sssssssss", 
                uniqid(), 
                "Ma. Carmela Abad", 
                "Tamayo",
                "Internal Medicine",
                "Dermatology",
                524,
                "0906-959-9814",
                "Lory",
                "U-MAB 323",
            );

            $result = $statement->execute();
            if (!$result) {
                return array('Database error');
            }
        }
    }

    function createDoctorSchedulesTable() {

    }

    /**
     * Fetch doctors that matches specialization request
     * @param request: HTTP get request
     */
    function fetchDoctors(Array $request) {
        $specialization = $request['specialization'];

        $doctorsTable = createDoctorsTable();
        if (!$doctorsTable) {
            return array('Database error');
        }

        $doctors = createDoctors();
        if (!doctors) {
            return array('Database error');
        }

        $query = "SELECT * FROM doctors WHERE secondary_specialization = ?";
        $statement = mysqli_prepare($this->database->getConnection(), $query);
        $statement->bind_param("s", $specialization);

        $result = $statement->execute();
        if (!$result) {
            return array('Database error');
        }

        $result = $statement->get_result();
        $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

        return $data;
    }
} 
?>