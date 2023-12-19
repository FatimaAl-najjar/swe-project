<?php

define('__ROOT__', "../app/");

// Include necessary files
require_once(__ROOT__ . "model/Appointment.php");
require_once(__ROOT__ . "controller/Appointments.php");
require_once(__ROOT__ . "view/ViewAppointment.php");

// Create instances of the model, controller, and view
$model = new Appointment("0");
$controller = new AppointmentsController($model);
$view = new ViewAppointment($controller, $model);
?><?php echo $view->listAppointments()?>