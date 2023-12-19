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
    $Email = isset($_POST["Email"]) ? $_POST["Email"] : "";
    $Username = isset($_POST["Username"]) ? $_POST["Username"] : "";
    $Password = isset($_POST["Password"]) ? $_POST["Password"] : "";

    // Ensure you have a database connection established here
    $conn = $db->getConn();

    if (empty($Username) || empty($Email) || empty($Password)) {
        $errorMessage = "<h2>Please fill the required field</h2>";
    } else {
        // Use the connection from $db
        $Email = mysqli_real_escape_string($conn, $Email);
        $Username = mysqli_real_escape_string($conn, $Username);
        $Password = mysqli_real_escape_string($conn, $Password);

        $result = $controller->addAdmin($Email, $Username, $Password);

        if ($result) {
            header("Location:login.php");
            exit;
        } else {
            $errorMessage = "<h2>An error occurred during registration.</h2>";
        }
    }
}

echo $errorMessage;

?>
<?php echo $view->addAdminForm();?>
