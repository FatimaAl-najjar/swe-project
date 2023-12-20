
<?php
require_once(__ROOT__ . "model/Appointment.php");
require_once(__ROOT__ . "view/View.php");
 ?>
 
 <link rel="stylesheet" href="css/feedback.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/listedAppointments.css">
 <?php
class ViewAppointment extends View {
    public function listAppointments() {
        $str = '<div class="container">' .
    '<aside>' .
    '<div class="top">' .
    '<div class="close" id="close-btn">' .
    '<i class="bx bxs-log-out-circle"></i>' .
    '</div>' .
    '</div>' .
    '<div class="sidebar">' .
    '<a class="active" href="drindex.php">' .
    '<i class="bx bxs-grid-alt"></i>' .
    '<h3>Dashboard</h3>' .
    '</a>' .
    '<a href="drAnnouncements.php">' .
    '<i class="bx bx-add-to-queue"></i>' .
    '<h3>View Announcements</h3>' .
    '</a>' .
    '<a href="appointment_index.php">' .
    '<i class="bx bxs-add-to-queue"></i>' .
    '<h3>View Appointments</h3>' .
    '</a>' .
    // '<a href="feedbacks.php">' .
    // '<i class=\'bx bxs-view-square\'></i>' .
    // '<h3>View Feedbacks</h3>' .
    // '</a>' .
    '<a href="addDoctor.php">' .
    '<i class="bx bx-add-to-queue"></i>' .
    '<h3>Add Doctor</h3>' .
    '</a>' .
    '<a href=\'login.php?action=Logout\'>' .
    '<i class=\'bx bxs-log-out\'></i>' .
    '<h3>Logout</h3>' .
    '</a>' .
    '</div>' .
    '</aside>' .
    '<main id="swup" class="transition-fade">' .
    '<h1>My Dashboard</h1>' .
    '<div class="insights">' .
    '<div class="sales">' .
    '<div class="middle">' .
    '<div class="left">' .
    '<h1>All appointments</h1>' .
    '<div class="card">';

$appointments = $this->model->getAllAppointments(); // Retrieve all appointments
$str .= "<div class='appointment-list'>";

if (!empty($appointments)) {
    foreach ($appointments as $appointment) {
        $str .= "<li class='appointment-item'>";
        $str .= "Date: " . $appointment->getDate() . "<br>";
        $str .= "Time: " . $appointment->getTime() . "<br>";
        $str .= "</li>";
    }
} else {
    $str .= "<p>No appointments found.</p>";
}

$str .= '</div>' .
    '</div>' .
    '</div>' .
    '</div>' .
    '</div>' .
    '</main>' .
    '</div>';

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