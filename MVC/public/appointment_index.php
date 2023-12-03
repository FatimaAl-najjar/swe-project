
<link rel="stylesheet" href="css/bookAppointment.css">
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

// Handle actions based on request parameters
if (isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];

    // Call the appropriate method in the controller
    if ($action == 'insert') {
        $controller->insert();
    } elseif ($action == 'edit') {
        $controller->edit();
    } elseif ($action == 'delete') {
        $controller->delete();
    }
    // header("Location:appointment_index.php");
}

// Display the appropriate view based on the user's role
// if (isset($_SESSION['role']) && $_SESSION['role'] == 'patient') {
//     echo $view->outputPatientView();
// } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'doctor') {
//     echo $view->outputDoctorView();
// }

?><?php echo $view->outputPatientView()?>