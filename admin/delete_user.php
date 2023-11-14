<?php

session_start();
// Include connection
include_once "../includes/dbh.inc.php";
// Include patient class
include_once "../Classes/patient.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the patient ID to be deleted
    $patientID = $_POST['patientID'];
    $patient = Patient::find($patientID);
    if ($patient) {
        // This script will delete all of the HTML components in the document.
        delete('todelete');
        // Get data of the patient
        echo "ID:" . $patient->ID . "<br>";
        echo "First name:" . $patient->FirstName . "<br>";
        echo "Last name:" . $patient->LastName . "<br>";
        echo "Email:" . $patient->Email . "<br>";
        echo "password:" . $patient->Password . "<br>";
        echo "Phone number:" . $patient->Phonenumber;
    }
    else {
        echo "No patient with this id";
    }
    // echo''.$patientID.'';

}
// Prepare the DELETE query
// $sql = "DELETE FROM patients WHERE patientID = ?";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/signup.css">
        <title>Delete patient</title>
    </head>
    <style>
        .card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
    </style>
    <body>
        <div id="todelete" class="card">
            <form action="" method="post">
                <h1>Patient ID:</h1>
                <input type="text" name="patientID" placeholder="Enter patient's ID"><br>
                <button class="btn" type="submit" value="submit">Search for patient</button>
                <button class="btn" name="cancel" formnovalidate>Cancel</button>
            </form>
        </div>
    </body>
</html>