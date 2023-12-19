 <!-- <?php
// require_once(__ROOT__ . "model/Appointment.php");
// require_once(__ROOT__ . "view/View.php");
 ?> -->
 <!-- <?php
// class showAppointments extends View {
//     public function listAppointments() {
//         $this->model->getAllAppointments();
//     }}
    ?>  -->

<link rel="stylesheet" href="css/listedAppointments.css">
<?php
require_once(__ROOT__ . "model/Appointment.php");
require_once(__ROOT__ . "view/View.php");
?>

<!-- <style>
    .appointment-list {
        list-style: none;
        padding: 0;
        margin: 0;
        max-height: 300px;
        overflow-y: auto;
        border: 1px solid #00316e;
        border-radius: 5px;
        padding: 10px;
    }

    .appointment-item {
        background-color: #f2f2f2;
        padding: 10px;
        margin-bottom: 10px;
    }
</style> -->

<?php
class ShowAppointments extends View {
    public function listAppointments() {
        $appointments = $this->model->getAllAppointments(); // Retrieve all appointments

        // Display the appointments with enhanced styling
        $str = "<div class='appointment-list'>";
        if (!empty($appointments)) {
            $str .= "<ul class='appointment-list'>";
            foreach ($appointments as $appointment) {
                $str .= "<li class='appointment-item'>";
                // $str .= "Patient ID: " . $appointment->getPatientId() . "<br>";
                $str .= "Date: " . $appointment->getDate() . "<br>";
                $str .= "Time: " . $appointment->getTime() . "<br>";
                $str .= "</li>";
            }
            $str .= "</ul>";
        } else {
            $str .= "<p>No appointments found.</p>";
        }
        $str .= "</div>";

        return $str;
    }
}
?>