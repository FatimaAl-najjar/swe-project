<h1>Home!!</h1>

<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Patient.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/ViewPatient.php");

// echo "Session e-mail: ".$_SESSION["Email"]."<br>";

$model = new Patient($_SESSION["ID"]);
// echo "First name: ".$model->getFirstName()."<br>";
// echo "Last name: ".$model->getLastName()."<br>";
// echo "Email: ".$model->getEmail()."<br>";
// echo "Password: ".$model->getPassword()."<br>";
// echo "Phone number: ".$model->getPhonenumber()."<br>";

$controller = new PatientController($model);
$view = new ViewPatient($controller, $model);
// echo "view"."<br>";
echo $view->output();
// echo "OUTPUT"."<br>";

?>

<a href="PatientProfile.php"><button>Profile</button></a> 