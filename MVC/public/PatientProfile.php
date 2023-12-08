<?php 

require_once(__ROOT__ . "model/Patient.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/ViewPatient.php");
?>

<?php
$model = new Patient($_SESSION["ID"]);
$controller = new PatientController($model);
$view = new ViewPatient($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	switch($_GET['action']){
		case 'edit':
			echo $view->editForm();
			break;
		case 'editaction':
			$controller->edit();
			echo $view->output();
			break;
		case 'delete':
			$controller->delete();
			echo $view->output();
		case 'signOut':
			session_destroy();
			header("Location:try.php");
			break;
	}
}
else
	echo $view->output();

?>