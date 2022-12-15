<?php

require_once('models/Appointment.php');
require_once('models/Database.php');
require_once('controllers/Controller.php');
require_once('interfaces/DoctorsInterface.php');

class BookAppointmentController extends Controller implements DoctorsInterface {
    /**
     * Fetch doctor that matches appointment request
     * @param request: HTTP GET request
     */
    function fetchDoctors(Array $request) {
        $uid = $request['doctor'];
        $query = "SELECT * FROM doctors WHERE uid = '{$uid}'";
        
        $result = mysqli_query($this->getDatabase()->getConnection(), $query);
        if (!$result) {
            return array('error' => 'Database error');
        }

        if (mysqli_num_rows($result) < 1) {
            return array('error' => 'No doctor found with the specified request');
        }

        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    /**
     * Fetch the schedules of the doctors
     * @param doctor_id: Doctor uid
     */
    function fetchDoctorSchedules($doctor_id) {
        $query = "SELECT * FROM doctor_schedules WHERE doctor_id = '{$doctor_id}'";

        $result = mysqli_query($this->getDatabase()->getConnection(), $query);
        if (!$result) {
            return array('error' => 'Database error');
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

    /**
     * Sanitize data, validate appointment details
     * @param request: HTTP POST request
     */
    function validateData(Array $request) {
        $email_format = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
        $mobile_number_format = "/^.*(?=.*[0][9])(?=.*[0-9])/";
        $errors = array();

        $first_name = $this::sanitize($request["first_name"]);
        $last_name = $this::sanitize($request["last_name"]);
        $date_of_birth = $this::sanitize($request["date_of_birth"]);
        $sex = $this::sanitize($request["sex"]);
        $email = $this::sanitize($request["email"]);
        $mobile_number = $this::sanitize($request["mobile_number"]);
        $is_first_visit = $this::sanitize($request["is_first_visit"]);
        $schedule_id = $this::sanitize($request["schedule"]);
        $month = $this::sanitize($request["month"]);
        $day = $this::sanitize($request["day"]);
        $year = $this::sanitize($request["year"]);
        $date = date("Y-m-d", strtotime("{$year}-{$month}-{$day}"));

        if ($sex != "true" && $sex != "false") {
            array_push($errors, ["error" => "Please select your sex"]);
        }

        if (!preg_match($email_format, $email)) {
            array_push($errors, ["error" => "Please enter a valid email"]);
        }

        if (!preg_match($mobile_number_format, $mobile_number)) {
            array_push($errors, ["error" => "Please enter a valid mobile number"]);
        }

        if ($is_first_visit != "true" && $is_first_visit != "false") {
            array_push($errors, ["error" => "Please select an answer on first visit"]);
        }

        if (!empty($errors)) {
            return $errors;
        }

        $appointment = new Appointment(
            uniqid(),
            $_SESSION["uid"],
            $schedule_id,
            $date,
            json_decode($is_first_visit),
            false,
            $first_name,
            $last_name,
            $date_of_birth,
            json_decode($sex),
            $email,
            $mobile_number
        );

        $result = $this->checkIfScheduleExists($appointment);
        return $result;
    }

    /**
     * Check if doctor schedule exists
     * @param appointment: Appointment object
     */
    function checkIfScheduleExists(Appointment $appointment) {
        $query = "SELECT * FROM doctor_schedules WHERE uid = '{$appointment->getScheduleId()}'";
        $result = mysqli_query($this->getDatabase()->getConnection(), $query);

        if (!$result) {
            return array("error" => "Database error");
        }

        if (mysqli_num_rows($result) < 1) {
            return array("error" => "Schedule does not exist");
        }

        $result = $this->bookAppointment($appointment);
        return $result;
    }

    /**
     * Write appointment data to database
     * @param appointment: Appointment object
     * @param patient_information: Patient information object
     */
    function bookAppointment(Appointment $appointment) {
        $query =
            "INSERT INTO appointments(
                uid, 
                user_id, 
                schedule_id, 
                date, 
                is_first_visit, 
                status,
                first_name, 
                last_name, 
                date_of_birth, 
                sex, 
                email, 
                mobile_number
            )
            VALUES(
                '{$appointment->getUid()}', 
                '{$appointment->getUserId()}', 
                '{$appointment->getScheduleId()}',
                '{$appointment->getDate()}',
                '{$appointment->getIsFirstVisit()}',
                false,
                '{$appointment->getFirstName()}', 
                '{$appointment->getLastName()}', 
                '{$appointment->getDateOfBirth()}', 
                '{$appointment->getSex()}', 
                '{$appointment->getEmail()}', 
                '{$appointment->getMobileNumber()}'
            )";

        $result = mysqli_query($this->getDatabase()->getConnection(), $query);
        if (!$result) {
            return array("error" => "Could not book appointment, please try again");
        }

        return header("location: my-appointments.php");
    }
} 
?>