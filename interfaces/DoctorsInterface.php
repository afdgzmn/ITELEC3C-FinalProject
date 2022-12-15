<?php

interface DoctorsInterface {
    /**
     * Fetch doctors from database
     */
    function fetchDoctors(Array $request);

    /**
     * Fetch the schedules of the doctors
     * @param doctor_id: Doctor uid
     */
    function fetchDoctorSchedules($doctor_id);

    /**
     * Return parsed schedule day
     * @param day: Schedule day
     * type: Int
     */
    function parseDay($day);
}

?>