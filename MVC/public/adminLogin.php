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

if ($action == '') {
        
    $controller->adminLogin($_REQUEST['Email'], $_REQUEST['Username'], $_REQUEST['Password']);
    header("Location: ..admin/edit_patient.php");
    exit();

}
}
?>
<?php echo $view->loginForm();?>