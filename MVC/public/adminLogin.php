<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Admin.php");
require_once(__ROOT__ . "controller/AdminController.php");
require_once(__ROOT__ . "view/ViewAdmin.php");

$model = new Admin(123);
$controller = new AdminController($model);
$view = new ViewAdmin($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['like']}();
}

?>
<?php echo $view->loginForm();?>