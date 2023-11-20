
<?php
session_start();
// Include connection
include_once "../includes/dbh.inc.php";
// Include patient class
include_once "../Classes/Admin.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the patient ID to be deleted
    $patientID = $_POST['patientID'];
    $patient = Patient::find($patientID);
    if ($patient) {
        // This script will delete all of the HTML components in the document.
        delete('todelete');
        // Get data of the patient
        echo "ID:" . $admin->ID . "<br>";
        echo "Email:" . $admin->Email . "<br>";
        echo "Username:" . $admin->Usernameame . "<br>";
        echo "Password:" . $admin->Password . "<br>";
    }
    else {
        echo "No admin with this id";
    }
    // echo''.$patientID.'';

}
// Prepare the DELETE query
// $sql = "DELETE FROM patients WHERE patientID = ?";
?>