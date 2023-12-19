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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action == "Add Patient") {
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Phonenumber = $_POST['Phonenumber'];

        $controller->addPatient($FirstName, $LastName, $Email, $Password, $Phonenumber);
    }else{
        $errorMessage = "<h2>An error occurred during adding admin.</h2>";
    }
    echo $errorMessage;
}
?>
<?php echo $view->addPatientform();?>