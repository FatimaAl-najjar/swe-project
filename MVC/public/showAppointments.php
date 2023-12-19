<?php 

define('__ROOT__', "../app/");

// Include necessary files
require_once(__ROOT__ . "model/Appointment.php");
require_once(__ROOT__ . "controller/Appointments.php");
require_once(__ROOT__ . "view/showAppointments.php");
 
// Create instances of the model, controller, and view
$model = new Appointment("");
 
$controller = new AppointmentsController($model);
$view = new showAppointments($controller, $model);

echo $view->listAppointments()
?>