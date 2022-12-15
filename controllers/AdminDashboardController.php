<?php

include_once('models/Database.php');
include_once('controllers/Controller.php');
include_once('interfaces/AppointmentsInterface.php');

class AdminDashboardController extends Controller implements AppointmentsInterface { 
    /**
     * Checks if logged-in user is an admin
     */
    function checkIfAdmin() {
        $usertype = $_SESSION["user_type"];
        if ($usertype != 0) {
            return header("location: home.php");
        }
    }

    /**
     * Fetch appointments from users
     */
    function fetchAppointments() {
        $query = 
            "SELECT 
                appointments.uid,
                appointments.first_name as patient_first_name,
                appointments.last_name as patient_last_name,
                doctors.first_name, 
                doctors.last_name, 
                appointments.date, 
                doctor_schedules.start_time, 
                doctor_schedules.end_time,
                appointments.status
            FROM appointments 
            INNER JOIN doctor_schedules ON appointments.schedule_id = doctor_schedules.uid
            INNER JOIN doctors ON doctor_schedules.doctor_id = doctors.uid
            ORDER BY appointments.date ASC";

        $result = mysqli_query($this->getDatabase()->getConnection(), $query);
        if (!$result) {
            return array("Database error");
        }

        $appointments = array();
        while($row = mysqli_fetch_assoc($result)) {
            array_push($appointments, $row);
        }

        return $appointments;
    }

    /**
     * Update appointment
     * Status 1: Approve
     * Status 2: Cancel
     * @param request: HTTP Post request
     */
    function updateAppointment(Array $request) {
        $uid = $this::sanitize($request["appointment"]);
        $action = $this::sanitize($request["action"]);
        $status = 0;
        switch ($action) {
            case 1: 
                $status = 1;
                break;

            case 2:
                $status = 2;
                break;

            default:
                $status = 0;
                break;
        }

        $query = 
            "UPDATE appointments
            SET status = '{$status}'
            WHERE uid = '{$uid}'";

        $result = mysqli_query($this->getDatabase()->getConnection(), $query);
        if (!$result) {
            return array("error" => "Database error");
        }

        return header("location: admin-dashboard.php");
    }
}

?>