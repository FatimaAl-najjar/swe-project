<link rel="stylesheet" href="css/index.css">
<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Admin.php");
require_once(__ROOT__ . "controller/AdminController.php");
require_once(__ROOT__ . "view/ViewAdmin.php");

$model = new Admin("");
$controller = new AdminController($model);
$view = new ViewAdmin($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}

if(isset($_POST['login']))	{
	$Email=$_REQUEST["Email"];
	$Password=$_REQUEST["Password"];
	$sql = "SELECT * FROM patient where Email='$Email' and password='$password'";
	$dbh = new Dbh();
	$result = $dbh->query($sql);
	if ($result->num_rows == 1){
		$row = $dbh->fetchRow();
		$_SESSION["ID"]=$row["ID"];
		$_SESSION["FirstName"]=$row["FirstName"];
		header("Location:profile.php");
	}
}
?>

<!-- What will appear in the php form  -->
<?php echo $view->loginForm();?>
