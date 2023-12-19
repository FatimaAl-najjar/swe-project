<link rel="stylesheet" href="css/index.css">
<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Patient.php");
require_once(__ROOT__ . "model/Patients.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/ViewPatient.php");

$model = new Patients();
$controller = new PatientController($model);
$view = new ViewPatient($controller, $model);

// $model = new Patient(123);
// $controller = new PatientController($model);
// $view = new ViewPatient($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}

if(isset($_POST['submit']))	{
	$Email = $_REQUEST["Email"];
	$Password = $_REQUEST["Password"];
	$sql = "SELECT * FROM patients where Email='$Email' AND Password='$Password'";
	$dbh = new Dbh();
	$result = $dbh->query($sql);
	if ($result->num_rows == 1){
		$row = $dbh->fetchRow();
		$_SESSION["ID"]=$row["ID"];
		$_SESSION["Email"]=$row["Email"];
		echo $_SESSION["ID"];
		echo $_SESSION["Email"];
		header("Location:index.php");
		// header("Location:feedbackPatient.php");
		// header("Location:PatientProfile.php"); // WORKING
	}
}

?>
<?php echo $view->loginForm();?>