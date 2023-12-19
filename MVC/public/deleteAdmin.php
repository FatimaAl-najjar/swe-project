
<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Admin.php");
require_once(__ROOT__ . "controller/AdminController.php");
require_once(__ROOT__ . "view/ViewAdmin.php");

$errorMessage="";

$model = new Admin("");
$db = new Dbh();
$controller = new AdminController($model);
$view = new ViewAdmin($controller, $model);
$errorMessage = "";
if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action == "Delete Admin") {
            if (isset($_POST['adminIDToDelete'])) {
                $adminIDToDelete = $_POST['adminIDToDelete'];
                echo "Submitted ID: $adminIDToDelete"; // Check if the correct ID is captured
                $controller->deleteAdmin($adminIDToDelete);
            } else {
                $errorMessage= "<h2>Admin ID not provided in the form.</h2>";
            }
        } elseif ($action == "cancel") {
            echo "Cancel button clicked.";
            // You can add cancel logic if needed
        } else {
            echo "Unknown action: $action";
        }
    }
}


  

echo $errorMessage;
 ?>
 <?php echo $view->deleteForm();?>