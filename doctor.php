<?php
// doctor.php

class Doctor {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function assignDoctor($patientId, $doctorId) {
        // Add logic to assign a doctor to a patient
    }

    // Additional doctor-related functions can be added here
}
?>
