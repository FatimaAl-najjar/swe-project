<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Admin.php");
require_once(__ROOT__ . "controller/AdminController.php");
require_once(__ROOT__ . "view/ViewAdmin.php");
require_once(__ROOT__ . "model/Patients.php");

$model2 = new Patients();

$model = new Admin("");
$db = new Dbh();
$controller = new AdminController($model);
$view = new ViewAdmin($controller, $model);
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action == "Add Patient") {
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Phonenumber = $_POST['Phonenumber'];


        $existingPatient = $model2->getPatientByEmail($Email);

        if (empty($FirstName) || empty($LastName)) {
            echo "Error: First Name and Last Name cannot be empty." . "<br>";
            $errorOccurred = true;
        }
        if ($existingPatient) {
            echo "Error: Patient with the same email already exists." . "<br>";
            $errorOccurred = true;
        }
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            echo "Error: Invalid email format." . "<br>";
            $errorOccurred = true;
        }
        if (!preg_match('/^\d{11}$/', $Phonenumber)) {
            echo "Error: Invalid phone number format (should be 11 digits)." . "<br>";
            $errorOccurred = true;
        }

        else {
            $controller->addPatient($FirstName, $LastName, $Email, $Password, $Phonenumber);
        }
        //  else {
        //     echo "<h2>An error occurred during adding patient.</h2>";
        // }
    }
    else{
        $errorMessage = "<h2>An error occurred during adding admin.</h2>";
    }
    echo $errorMessage;
}
?>
<?php echo $view->addPatientform();?>