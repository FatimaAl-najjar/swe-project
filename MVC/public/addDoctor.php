<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/doctor.php");
require_once(__ROOT__ . "controller/doctorController.php");
require_once(__ROOT__ . "view/doctor.php");

$model = new doctor("");
$db = new Dbh();
$controller = new doctorController($model);
$view = new viewDoctor($controller, $model);

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

        $result = $controller->addDoctor($Email, $Username, $Password);

        if ($result) {
            // header("Location: ./adminlogin.php");
            header("Location: ./doctorLogin.php");
            exit;
        } else {
            $errorMessage = "<h2>An error occurred during registration.</h2>";
        }
    }
}

echo $errorMessage;

?>
<?php echo $view->addDoctorForm();?>
