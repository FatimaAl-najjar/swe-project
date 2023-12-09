<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Patient.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/viewPatient.php");

$model = new Patient($_SESSION["ID"]);
$controller = new PatientController($model);
$view = new viewPatient($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	switch($_GET['action']){
		case 'editaction':
			$controller->edit();
			echo $view->output();
			break;
		case 'feedback':
			header("Location:feedbackpatient.php");
			break;
		case 'delete':
			$controller->delete();
			echo $view->output();
		case 'signOut':
			session_destroy();
			header("Location:index.php");
			break;
	}
}
else
	echo $view->output();

?>