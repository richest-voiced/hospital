<?php
// patient.php

class Patient {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function registerPatient($name, $dob, $address) {
        // Add logic to register a new patient
    }

    // Additional patient-related functions can be added here
}
?>
