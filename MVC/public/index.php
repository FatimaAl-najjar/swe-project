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
	$Email=$_REQUEST["Email"];
	$Password=$_REQUEST["Password"];
	$sql = "SELECT * FROM patients where Email='$Email' and Password='$Password'";
	$dbh = new Dbh();
	$result = $dbh->query($sql);
	if ($result->num_rows == 1){
		$row = $dbh->fetchRow();
		$_SESSION["ID"]=$row["ID"];
		$_SESSION["Email"]=$row["Email"];
		header("Location:PatientProfile.php");
	}
}
?>

<!-- What will appear in the php form  -->

<table width='100%' align='center' border=1 >
	<tr>
		<td align="center">Login</td>
		<td></td>
		<td align="center">SignUp</td>
	</tr>
	<tr>
		<td width='40%' align="center"><?php echo $view->loginForm();?></td>
		<td align="center">OR</td>
		<td width='40%' align="center"><?php echo $view->signupForm();?></td>
	</tr>
</table>

