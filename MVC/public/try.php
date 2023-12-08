<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Patient.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/ViewPatient.php");

// $model = new Patient();
// $controller = new PatientController($model);
// $view = new ViewPatient($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}

if(isset($_POST['login']))	{
	$Email=$_REQUEST["Email"];
	$password=$_REQUEST["password"];
	$model = new Patient(1);

	// $sql = "SELECT * FROM patients where Email='$Email' and Password='$Password'";
	// $dbh = new Dbh();
	// $result = $dbh->query($sql);
	// if ($result->num_rows == 1){
	// 	$row = $dbh->fetchRow();
	// 	$_SESSION["ID"]=$row["ID"];
	// 	$_SESSION["FirstName"]=$row["FirstName"];
	// 	$_SESSION["LastName"]=$row["LastName"];
	// 	$_SESSION["Email"]=$row["Email"];
	// 	$_SESSION["Password"]=$row["Password"];
	// 	$_SESSION["Phonenumber"]=$row["Phonenumber"];
	// 	header("Location:profile.php");
	// }
}

echo $view->loginForm();
echo $view->output();
?>
