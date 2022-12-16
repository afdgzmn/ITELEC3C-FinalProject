<?php

class Appointment {
    private $user_id;
    private $schedule_id;
    private $date;
    private $is_first_visit;
    private $status;
    private $first_name;
    private $last_name;
    private $date_of_birth;
    private $sex;
    private $email;
    private $mobile_number;

    function __construct($user_id, $schedule_id, $date, $is_first_visit, $status, $first_name, $last_name, $date_of_birth, $sex, $email, $mobile_number) {
        $this->user_id = $user_id;
        $this->schedule_id = $schedule_id;
        $this->date = $date;
        $this->is_first_visit = $is_first_visit;
        $this->status = $status;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->sex = $sex;
        $this->email = $email;
        $this->mobile_number = $mobile_number;
    }

    function getUserId() {
        return $this->user_id;
    }

    function getScheduleId() {
        return $this->schedule_id;
    }

    function getDate() {
        return $this->date;
    }

    function getIsFirstVisit() {
        return $this->is_first_visit;
    }
    
    function getStatus() {
        return $this->status;
    }

    function getFirstName() {
        return $this->first_name;
    }

    function getLastName() {
        return $this->last_name;
    }

    function getDateOfBirth() {
        return $this->date_of_birth;
    }

    function getSex() {
        return $this->sex;
    }

    function getEmail() {
        return $this->email;
    }

    function getMobileNumber() {
        return $this->mobile_number;
    }
}

?>