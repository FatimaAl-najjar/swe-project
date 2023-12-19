<?php
require_once(__ROOT__ . "model/Appointment.php");
require_once(__ROOT__ . "view/View.php");
 ?>
 <?php
class showAppointments extends View {
    public function listAppointments() {
        $this->model->getAllAppointments();
    }}