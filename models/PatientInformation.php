<?php

class PatientInformation {
    private $uid;
    private $appointment_id;
    private $first_name;
    private $last_name;
    private $date_of_birth;
    private $sex;
    private $email;
    private $mobile_number;

    function __construct($uid, $appointment_id, $first_name, $last_name, $date_of_birth, $sex, $email, $mobile_number) {
        $this->uid = $uid;
        $this->appointment_id = $appointment_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->sex = $sex;
        $this->email = $email;
        $this->mobile_number = $mobile_number;
    }

    function getUid() {
        return $this->uid;
    }

    function getAppointmentId() {
        return $this->appointment_id;
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