<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Admin.php");
require_once(__ROOT__ . "controller/AdminController.php");
require_once(__ROOT__ . "view/ViewAdmin.php");
$model = new Admin("");
$db = new Dbh();
$controller = new AdminController($model);
$view = new ViewAdmin($controller, $model);
$errormessage="";

// Check for form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action == "Delete Patient") {
        if (isset($_POST['patientIDToDelete'])) {
            $patientIDToDelete = $_POST['patientIDToDelete'];
            $controller->deletePatient($patientIDToDelete);
            $errormessage="<h2>The Patient Deleted successfully</h2>";
        } else {
            $errormessage= "<h2>Patient ID not provided in the form.</h2>";
        }
    }
}
    echo $errormessage;
?>
<?php echo $view->deletePatientForm(); ?>