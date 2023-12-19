<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Admin.php");
require_once(__ROOT__ . "controller/AdminController.php");
require_once(__ROOT__ . "view/ViewAdmin.php");
$model = new Admin("");
$db = new Dbh();
$controller = new AdminController($model);
$view = new ViewAdmin($controller, $model);

$errorMessage = "";

// Check for form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action == "Edit Patient") {
        if (isset($_POST['patientIDToEdit'])) {
            $patientIDToEdit = $_POST['patientIDToEdit'];

            // Prepare data for editing (you can extend this based on your fields)
            $data = [
                'FirstName' => $_POST['updatedFirstName'],
                'LastName' => $_POST['updatedLastName'],
                'Email' =>$_POST['updatedEmail'],
                'Password'=> $_POST['updatedPassword'],
                'Phonenumber'=>$_POST['updatedPhonenumber']
            ];

            $controller->editPatient($patientIDToEdit, $data);
        } else {
             $errorMessage ="<h2>Patient ID not provided in the form.</h2>";
        }
    }
}
echo $errorMessage;
?>
<?php echo $view->editPatientForm();?>