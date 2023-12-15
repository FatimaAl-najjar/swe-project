
<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Admin.php");
require_once(__ROOT__ . "controller/AdminController.php");
require_once(__ROOT__ . "view/ViewAdmin.php");

$model = new Admin("");
$db = new Dbh();
$controller = new AdminController($model);
$view = new ViewAdmin($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}




if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action == "Delete Admin") {
        $adminIDToDelete = $_POST['adminIDToDelete'];
        $result = $controller->deleteAdmin($adminIDToDelete);

        if ($result) {
            echo "Admin with ID $adminIDToDelete has been successfully deleted ";
        } else {
            echo "Error deleting Admin with ID $adminIDToDelete ";
        }
    }
  
}
echo $errorMessage;
 ?>
 <?php echo $view->deleteForm();?>