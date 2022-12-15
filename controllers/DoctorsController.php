<?php

include_once('models/Database.php');
include_once('controllers/Controller.php');
include_once('interfaces/DoctorsInterface.php');

class DoctorsController extends Controller implements DoctorsInterface {
    /**
     * Fetch doctors that matches specialization request
     * @param request: HTTP GET request
     */
    function fetchDoctors(Array $request) {
        $specialization = $request['specialization'];
        $query = "SELECT * FROM doctors WHERE root_specialization LIKE '%{$specialization}%'";
        
        $result = mysqli_query($this->getDatabase()->getConnection(), $query);
        if (!$result) {
            return array('Database error');
        }

        $doctors = array();
        while($row = mysqli_fetch_assoc($result)) {
            array_push($doctors, $row);
        }

        return $doctors;
    }

    /**
     * Fetch the schedules of the doctors
     * @param doctor_id: Doctor uid
     */
    function fetchDoctorSchedules($doctor_id) {
        $query = "SELECT * FROM doctor_schedules WHERE doctor_id = '{$doctor_id}'";

        $result = mysqli_query($this->getDatabase()->getConnection(), $query);
        if (!$result) {
            return array('Database error');
        }

        $schedules = array();
        while($row = mysqli_fetch_assoc($result)) {
            array_push($schedules, $row);
        }

        return $schedules;
    }

    /**
     * Return parsed schedule day
     * @param day: Schedule day
     * type: Int
     */
    function parseDay($day) {
        switch ($day) {
            case 1: {
                return "Monday";
                break;
            }
            case 2: {
                return "Tuesday";
                break;
            }
            case 3: {
                return "Wednesday";
                break;
            }
            case 4: {
                return "Thursday";
                break;
            }
            case 5: {
                return "Friday";
                break;
            }
            case 6: {
                return "Saturday";
                break;
            }
            case 7: {
                return "Sunday";
                break;
            }
            default:  {
                return "Unknown";
                break;
            }
        }
    }
} 
?>