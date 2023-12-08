<h1>Home!!</h1>

<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Patient.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/ViewPatient.php");

echo $_SESSION["Email"];

$model = new Patient($_SESSION["ID"]);
$controller = new PatientController($model);
$view = new ViewPatient($controller, $model);

$view->output();

?>