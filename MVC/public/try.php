<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Patients.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/ViewPatient.php");

$model = new Patient("");
$controller = new PatientController($model);
$view = new ViewPatient($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}

if(isset($_POST['login']))	{
	$name=$_REQUEST["name"];
	$password=$_REQUEST["password"];
	$sql = "SELECT * FROM user where Name='$name' and password='$password'";
	$dbh = new Dbh();
	$result = $dbh->query($sql);
	if ($result->num_rows == 1){
		$row = $dbh->fetchRow();
		$_SESSION["ID"]=$row["ID"];
		$_SESSION["Name"]=$row["Name"];
		header("Location:profile.php");
	}
}

?>
<table width='100%' align='center' >
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