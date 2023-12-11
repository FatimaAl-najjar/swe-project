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
    $errorMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["Email"];
        $username = $_POST["Username"];
        $password = $_POST["Password"];
    
        $admin = $controller->adminLogin($email, $username, $password);
    
        if ($admin) {
            $_SESSION["ID"] = $admin->ID;
            $_SESSION["Username"] = $admin->Username;
            $_SESSION["Email"] = $admin->Email;
            $_SESSION["Password"] = $admin->Password;
            header("Location: ../index.php");
        } else {
            $errorMessage = "<h2>Incorrect email, username, or password</h2>";
        }

    }
    echo $errorMessage;
?>
<?php echo $view->loginForm();?>