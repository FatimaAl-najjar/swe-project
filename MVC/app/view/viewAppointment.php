<?php

require_once(__ROOT__ . "view/View.php");
 ?>
 <?php
class ViewAppointment extends View {
    public function outputPatientView() {
        $str = "";

        // Patient view: Appointment booking form
        $str .= "<h1>Book Appointment</h1>";
        $str .= "<form action='appointment_index.php?action=insert' method='POST'>";
        // $str .= "<label>Name:</label>";
        // $str .= "<input type='text' name='name'><br><br>";
        $str .= "<label>Date:</label>";
        $str .= "<input type='date' name='day'><br><br>";
        $str .= "<label>Time:</label>";
        $str .= "<input type='time' name='duration'><br><br>";
        $str .= "<input type='submit' value='Book Appointment'>";
        $str .= "</form>";

        return $str;
    }

    public function outputDoctorView() {
        $str = "";

        // Doctor view: List of appointments
        $str .= "<h1>Appointments</h1>";
        $appointments = $this->model->getAllAppointments();
        if (count($appointments) > 0) {
            $str .= "<ul>";
            foreach ($appointments as $appointment) {
                // $str .= "<li>Name: " . $appointment['Name'] . "</li>";
                $str .= "<li>Date: " . $appointment['day'] . "</li>";
                $str .= "<li>Time: " . $appointment['duration'] . "</li><br>";
            }
            $str .= "</ul>";
        } else {
            $str .= "No appointments found.";
        }

        return $str;
    }
}
?>