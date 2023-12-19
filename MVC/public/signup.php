<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Patients.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/ViewPatient.php");

$model = new Patients();
$controller = new PatientController($model);
$view = new ViewPatient($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

if (isset($_POST['submit'])) {
    $FirstName = $_REQUEST["FirstName"];
    $LastName = $_REQUEST["LastName"];
    $Email = $_REQUEST["Email"];
    $Password = $_REQUEST["Password"];
    $Phonenumber = $_REQUEST["Phonenumber"];

    // Check if the patient already exists
    $existingPatient = $model->getPatientByEmail($Email);

    if ($existingPatient) {
        // Patient with the same email already exists
        echo "Error: Patient with the same email already exists.";
    } else {
        // Insert the new patient
        $sql = "INSERT INTO patients (FirstName, LastName, Email, Password, Phonenumber) 
                VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";

        $dbh = new Dbh();
        echo "INSERT INTO DATABASE" . "<br>";

        $result = $dbh->query($sql);

        if ($result) {
            // Insertion successful
            $_SESSION["ID"] = $model->getID($FirstName, $LastName, $Email, $Password, $Phonenumber);
            $_SESSION["FirstName"] = $FirstName;
            $_SESSION["LastName"] = $LastName;
            $_SESSION["Email"] = $Email;
            $_SESSION["Password"] = $Password;
            $_SESSION["Phonenumber"] = $Phonenumber;

            header("Location: PatientProfile.php");
        } else {
            echo "Failed to insert data into the database.";
        }
    }
}

?>

<?php echo $view->signupForm();?>
