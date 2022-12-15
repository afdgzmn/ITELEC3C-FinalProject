<?php

interface AppointmentsInterface {
    /**
     * Fetch appointments from database
     */
    function fetchAppointments();

    /**
     * Update appointment
     * @param request: HTTP Post request
     */
    function updateAppointment(Array $request);
}

?>