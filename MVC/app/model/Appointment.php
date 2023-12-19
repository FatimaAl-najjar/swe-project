<?php
require_once(__ROOT__ . "view/ViewPatient.php");
require_once(__ROOT__ . "model/Model.php");

class Appointment extends Model {
    private $id;
    private $name;
    private $date;
    private $time;
    private $patientId;

    function __construct($id, $name = "", $date = "", $time = "") {
        $this->id = $id;
        // $this->patientId = $patientId;
        $this->db = $this->connect();

        // if ("" === $name) {
        //     $this->readAppointment($id);
        // } else {
        //     $this->name = $name;
        //     $this->date = $date;
        //     $this->time = $time;
        // }
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        return $this->name = $name;
    }

    function getDate() {
        return $this->date;
    }

    function setDate($date) {
        return $this->date = $date;
    }

    function getTime() {
        return $this->time;
    }

    function setTime($time) {
        return $this->time = $time;
    }

    function getID() {
        return $this->id;
    }

    function getAllAppointments() {
        
        $sql = "SELECT appointments.*, patients.FirstName FROM appointments JOIN patients ON appointments.patients_id = patients.id";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Appointment ID: " . $row["ID"] . "<br>";
                echo "Patient Name: " . $row["FirstName"] . "<br>";
                echo "Date: " . $row["day"] . "<br>";
                echo "Time: " . $row["duration"] . "<br>";
                echo "<br>";
            }
        } else {
            echo "No appointments found.";
        }
    }

    function readAppointment($id) {
        session_start();
        if (isset($_SESSION['ID'])) {
        $sql = "SELECT * FROM appointments WHERE patients_id=" .$_SESSION['ID'];
        $db = $this->connect();
        $result = $db->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $this->name = $row["patients_id"];
            $this->date = $row["day"];
            $this->time = $row["duration"];
        } else {
            $this->name = "";
            $this->date = "";
            $this->time = "";
        }
    }
    }

    function insertAppointment( $date, $time) {
  
        if (isset($_SESSION['ID'])) {
        // $selectedDay = $selectedDateTime->format('N'); // 1 (Monday) to 7 (Sunday)
        if (empty(trim($date))) {
            echo " <div class='error-box'>Error: pick an appointment first please <br></br>";
        }
        // Validate appointment time
        if (!$this->validateAppointmentTime($time)) {
            echo " <div class='error-box'>Appointments are only available from 5pm to 10pm";
            exit;
        }

        // Validate appointment day
        if (!$this->validateAppointmentDay($date)) {
            // echo "ERROR: Appointments are not available on Fridays.";
            echo "<div class='error-box'>Appointments are only available from Saturday to Thursday.</div>";
            exit;
            // return;
        }

        // Check appointment availability
        if (!$this->checkAppointmentAvailability($date, $time)) {
            echo "<div class='error-box'> The selected appointment slot is already booked.";
            exit;
        }

        // Insert the appointment into the database
        $sql = "INSERT INTO appointments (patients_id, day, duration) VALUES (".$_SESSION['ID'].", '$date', '$time')";
         
        if ($this->db->query($sql) === true) {
            echo "Appointment created successfully.";
            exit;
        } 
    else{
            echo "ERROR: Could not able to execute $sql. " . $this->db->error;
        }
    }
    else {
        echo "<div class='error-box'> you must be logged in first";
        exit;
    }
    }

    function validateAppointmentTime($time) {
        // Check if the appointment time is between 5 PM and 10 PM
        $startTime = strtotime('17:00');
        $endTime = strtotime('22:00');
        $appointmentTime = strtotime($time);

        return ($appointmentTime >= $startTime && $appointmentTime <= $endTime);
    }

    function validateAppointmentDay($date) {
        // Check if the appointment day is not Friday
        return (date('N', strtotime($date)) != 5); // 5 corresponds to Friday
    }

function checkAppointmentAvailability($date, $time) {
    // Check if the appointment slot is already booked
    $sql = "SELECT * FROM appointments WHERE day='$date' AND duration='$time'";
    $result = $this->db->query($sql);

    return ($result->num_rows == 0);
}
}