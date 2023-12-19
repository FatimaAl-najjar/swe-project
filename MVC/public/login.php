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
$errormessage="";

if (isset($_GET['action']) && !empty($_GET['action'])) {
    switch($_GET['action']){
		case 'Logout':
			session_destroy();
			header("Location:login.php");
			break;
	}
}
if(isset($_POST['submit']))	{
	$Email = $_REQUEST["Email"];
	$Password = $_REQUEST["Password"];
	if ($model->isAdmin($Email)) {
		// Admin login detected
		$sql = "SELECT * FROM admin where Email='$Email' AND Password='$Password'";
		$dbh = new Dbh();
		$result = $dbh->query($sql);
		if ($result->num_rows == 1){
			$row = $dbh->fetchRow();
			$_SESSION["ID"] = $row["ID"];
			$_SESSION["Email"] = $row["Email"];
			header("Location: adminindex.php");
			exit;
		}else{
			$errormessage="<h2>Wrong e-mail or password please re-enter</h2>";
		}
	} 
	else if(isset($_POST['submit']))	{
		$Email = $_REQUEST["Email"];
		$Password = $_REQUEST["Password"];
		if ($model->isDoctor($Email)) {
			// Admin login detected
			$sql = "SELECT * FROM doctors where Email='$Email' AND Password='$Password'";
			$dbh = new Dbh();
			$result = $dbh->query($sql);
			if ($result->num_rows == 1){
				$row = $dbh->fetchRow();
				$_SESSION["ID"] = $row["ID"];
				$_SESSION["Email"] = $row["Email"];
				header("Location: drIndex.php");
				exit;
			}else{
				$errormessage="<h2>Wrong e-mail or password please re-enter</h2>";
			}
		}
		else {
		// Regular user login
		$sql = "SELECT * FROM patients where Email='$Email' AND Password='$Password'";
		$dbh = new Dbh();
		$result = $dbh->query($sql);
		if ($result->num_rows == 1){
			$row = $dbh->fetchRow();
			$_SESSION["ID"]=$row["ID"];
			$_SESSION["Email"]=$row["Email"];
			echo $_SESSION["ID"];
			header("Location: index.php");
			exit;
		}else{
			$errormessage="<h2>Wrong e-mail or password please re-enter</h2>";
		}
	}
}}
	echo $errormessage;
?>

<?php echo $view->loginForm();?>