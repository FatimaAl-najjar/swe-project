<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Patients.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/ViewPatient.php");

$model = new Patients();
$controller = new PatientController($model);
$view = new ViewPatient($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}

// Sign Up
// if(isset($_POST['submit']))	{
// 	$FirstName = $_REQUEST["FirstName"];
// 	$LastName = $_REQUEST["LastName"];
// 	$Email = $_REQUEST["Email"];
// 	$Password = $_REQUEST["Password"];
// 	$Phonenumber = $_REQUEST["Phonenumber"];
// 	$sql = "INSERT INTO patients (FirstName, LastName, Email, Password, Phonenumber) 
//         VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";
// 	$dbh = new Dbh();
// 	$result = $dbh->query($sql);
// 	if ($sql) {
// 		$sql = "SELECT * FROM patients where Email='$Email' AND Password='$Password'";
// 		$dbh = new Dbh();
// 		$result = $dbh->query($sql);
// 		if ($result->num_rows == 1){
// 			$row = $dbh->fetchRow();
// 			$_SESSION["ID"]=$row["ID"];
// 			$_SESSION["Email"]=$row["Email"];
// 			echo $_SESSION["ID"];
// 			echo $_SESSION["Email"];
// 			header("Location:PatientProfile.php");
// 		}
// 	}
// }
?>

<?php
// to check if the $view object is created successfully
// var_dump($view);
// echo $view->signupForm();
?>

<!-- 
Log-in -->
<?php
if(isset($_POST['submit']))	{
	echo "Function";
	$Email=$_REQUEST["Email"];
	$Password=$_REQUEST["Password"];
	$sql = "SELECT * FROM patients where Email='$Email' AND Password='$Password'";
	$dbh = new Dbh();
	$result = $dbh->query($sql);
	if ($result->num_rows == 1){
		$row = $dbh->fetchRow();
		$_SESSION["ID"]=$row["ID"];
		$_SESSION["Email"]=$row["Email"];
		echo $_SESSION["ID"];
		echo $_SESSION["Email"];
		header("Location:feedbackPatient.php");
		// header("Location:PatientProfile.php"); // WORKING
	}
}
?>
<?php
echo $view->loginForm();
?>
