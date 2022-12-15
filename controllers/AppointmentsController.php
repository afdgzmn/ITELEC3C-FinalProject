<?php

include_once('models/Database.php');
include_once('controllers/Controller.php');

class AppointmentsController extends Controller { 
    /**
     * Fetch appointments of user
     */
    function fetchAppointments() {
        $uid = $_SESSION["uid"];
        $query = 
            "SELECT 
                appointments.uid,
                doctors.first_name, 
                doctors.last_name, 
                appointments.date, 
                doctor_schedules.start_time, 
                doctor_schedules.end_time,
                appointments.status
            FROM appointments 
            INNER JOIN doctor_schedules ON appointments.schedule_id = doctor_schedules.uid
            INNER JOIN doctors ON doctor_schedules.doctor_id = doctors.uid
            WHERE user_id = '{$uid}'";

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
     * Cancel appointment
     * @param request: HTTP Post request
     */
    function cancelAppointment(Array $request) {
        $uid = $this::sanitize($request["appointment"]);
        $query = 
            "UPDATE appointments
            SET status = 2
            WHERE uid = '{$uid}'";

        $result = mysqli_query($this->getDatabase()->getConnection(), $query);
        if (!$result) {
            return array("error" => "Database error");
        }

        return header("location: my-appointments.php");
    }
}

?>