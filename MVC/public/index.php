<link rel="stylesheet" href="css/index.css">
<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Patients.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/ViewPatient.php");

$model = new Patients("0");
$controller = new PatientController($model);
$view = new ViewPatient($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}

if(isset($_POST['login']))	{
	$FirstName=$_REQUEST["FirstName"];
	$Password=$_REQUEST["Password"];
	$sql = "SELECT * FROM patients where FirstName='$FirstName' and Password='$Password'";
	$dbh = new Dbh();
	$result = $dbh->query($sql);
	if ($result->num_rows == 1){
		$row = $dbh->fetchRow();
		$_SESSION["ID"]=$row["ID"];
		$_SESSION["FirstName"]=$row["FirstName"];
		header("Location:PatientProfile.php");
	}
}
?>
<!-- No tables needed -->
<!-- What will appear in the php form -->
<?php echo $view->loginForm();?>