<?php

require_once(__ROOT__ . "view/View.php");
 ?>
 <?php
class ViewAppointment extends View {
    public function outputPatientView() {
//         $currentDateTime = new DateTime();
// $halfHourLater = $currentDateTime->add(new DateInterval('PT30M'));
// $halfHourLaterFormatted = $halfHourLater->format('Y-m-d\TH:i');
        // $str = "";
        // $str .= "<div class='row'>\n";
        // $str .= "<div class='home-img'>\n";
        // $str .= "<img class='my-img' src='images/waiting_room2.jpg'>\n";
        // $str .= "</div>\n";
        // // $str .= "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>\n";
        // $str .= "<form action='../public/appointment_index.php?action=insert " . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='POST'>";
        // $str .= "<input type='datetime-local' name='datetime' class='box' min='" . $halfHourLaterFormatted . "'>\n";
        // $str .= "<input type='submit' name='book_now' class='btn1'>\n";
        // $str .= "</form>\n";
        // $str .= "</div>\n";
        
        // return $str;
        $str = "";
            $str .= "<div class='row'>\n";
         $str .= "<div class='home-img'>\n";
        $str .= "<img class='my-img' src='images/waiting_room2.jpg'>\n";
        $str .= "</div>\n";
        // $str .= "<h1>Book Appointment</h1>";
        $str .= "<form action='appointment_index.php?action=insert' method='POST'>";
        // $str .= "<label>Name:</label>";
        // $str .= "<input type='text' name='name' class='box'><br><br>";
        $str .= "<label class='box'>Date:</label>";
        $str .= "<input type='date' name='day' class='box'><br><br>";
        $str .= "<label class='box'>Time:</label>";
        $str .= "<input type='time' name='duration'  class='box'><br><br>";
        $str .= "<input type='submit' value='Book Appointment' class='btn1'>";
        $str .= "</form>";
        $str .= "</div>\n";
        return $str;
    }

    // public function outputDoctorView() {
    //     $str = "";

    //     // Doctor view: List of appointments
    //     $str .= "<h1>Appointments</h1>";
    //     $appointments = $this->model->getAllAppointments();
    //     if (count($appointments) > 0) {
    //         $str .= "<ul>";
    //         foreach ($appointments as $appointment) {
    //             // $str .= "<li>Name: " . $appointment['Name'] . "</li>";
    //             $str .= "<li>Date: " . $appointment['day'] . "</li>";
    //             $str .= "<li>Time: " . $appointment['duration'] . "</li><br>";
    //         }
    //         $str .= "</ul>";
    //     } else {
    //         $str .= "No appointments found.";
    //     }

    //     return $str;
    // }
}
?>