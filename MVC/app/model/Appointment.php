
<?php
require_once(__ROOT__ . "view/ViewPatient.php");
require_once(__ROOT__ . "model/Model.php")
?>
<?php
// $view = new ViewAppointment($controller, $model);
class Appointment extends Model {
    // ...
    private $id;
    private $name;
    private $date;
    private $time;

    function __construct($id, $name = "", $date = "", $time = "") {
        $this->id = $id;
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
    function getAllAppointments()
    {
        echo"lma rabna ykremna isa kda 3shan ana t3bt bokra b2a";
        exit;
    }

    function readAppointment($id) {
        $sql = "SELECT * FROM appointments WHERE patients_id=" . $id;
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
    function insertAppointment( $date, $time) {
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
        $sql = "INSERT INTO appointments (  day, duration) VALUES (   '$date', '$time')";
         
        if ($this->db->query($sql) === true) {
            echo "Appointment created successfully.";
            exit;
        } else {
            echo "ERROR: Could not able to execute $sql. " . $this->db->error;
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

        return ($result->num_rows == 0); // Return true if no appointments are found for the given date and time
    }

    function editAppointment($id, $name, $date, $time) {
        $sql = "UPDATE appointments SET   day='$date', duration='$time' WHERE ID=$id";

        if ($this->db->query($sql) === true) {
            echo "Appointment updated successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . $this->db->error;
        }
    }

    function deleteAppointment($id) {
        $sql = "DELETE FROM appointments WHERE ID=$id";

        if ($this->db->query($sql) === true) {
            echo "Appointment deleted successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . $this->db->error;
        }
    }
}
?>