<?php
require_once(__ROOT__ . "view/ViewPatient.php");
require_once(__ROOT__ . "model/Model.php");

class Appointment extends Model {
    
    private $id;
    private $name;
    private $date;
    private $time;
    private $patientId;
    function __construct() {
        
        // $this->id = $id;
        // $this->patientId = $patientId;
        $this->db = $this->connect();
        
		// $this->getAllAppointments();
	}
 
    // function __construct($id, $name = "", $date = "", $time = "") {
    //     $this->id = $id;
    //     // $this->patientId=$_SESSION['ID'];
    //     // $this->patientId = $patientId;
    //     $this->db = $this->connect();

    //     // if ("" === $name) {
    //     //     $this->readAppointment($id);
    //     // } else {
    //     //     $this->name = $name;
    //     //     $this->date = $date;
    //     //     $this->time = $time;
    //     // }
    // }

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
    function setPatientId($patientId){
        return $this->$patientId;
    }
    // function getPatientId() {
    //     return $this->$patientId;
    // }
   
    function setTime($time) {
        return $this->time = $time;
    }

    function getID() {
        return $this->id;
    }

    function getAllAppointments() {
        $currentDate = date("Y-m-d");
        $sql = "SELECT appointments.*, patients.FirstName FROM appointments JOIN patients ON appointments.patients_id = patients.id WHERE day >= '$currentDate'";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            $appointments = array();
            while ($row = $result->fetch_assoc()) {
                $appointment = new Appointment();
                $appointment->setDate($row['day']);
                $appointment->setTime($row['duration']);

                $appointments[] = $appointment;
            }
            return $appointments;
        } else {
            echo "No upcoming appointments found.";
        }
    }

    function readAppointment($id) {
        
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
            //  echo " <div class='error-box'>Error: pick an appointment first please <br></br>";
            $Messageerror = "pick an appointment first please";
            
            echo "<script>alert('$Messageerror');</script>";
            
        
            exit;
        }
        // Validate appointment time
        if (!$this->validateAppointmentTime($time)) {
            //  echo " <div class='error-box'>Appointments are only available from 5pm to 10pm";
            //  exit;
            $Messageerror = "Appointments are only available from 5pm to 10pm";
            echo "<script>alert('$Messageerror');</script>";
            exit;
        }

        // Validate appointment day
        if (!$this->validateAppointmentDay($date)) {
            // echo "ERROR: Appointments are not available on Fridays.";
            // echo "<div class='error-box'>Appointments are only available from Saturday to Thursday.</div>";
            // exit;
            $Messageerror = "Appointments are only available from Saturday to Thursday.";
            echo "<script>alert('$Messageerror');</script>";
            exit;
            // return;
        }

        // Check appointment availability
        if (!$this->checkAppointmentAvailability($date, $time)) {
            // echo "<div class='error-box'> The selected appointment slot is already booked.";
            // exit;
            $Messageerror = "The selected appointment slot is already booked";
            echo "<script>alert('$Messageerror');</script>";
            exit;
        }

        // Insert the appointment into the database
        $sql = "INSERT INTO appointments (patients_id, day, duration) VALUES (".$_SESSION['ID'].", '$date', '$time')";
         
        if ($this->db->query($sql) === true) {
            // echo "Appointment created successfully.";
            // exit;
            $Messageerror = "Appointment created successfully.";
            echo "<script>alert('$Messageerror');</script>";
            exit;
        } 
    else{
            echo "ERROR: Could not able to execute $sql. " . $this->db->error;
        }
    }
    else {
        // echo "<div class='error-box'> you must be logged in first";
        // exit;
        $Messageerror = "you must be logged in first";
            echo "<script>alert('$Messageerror');</script>";
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