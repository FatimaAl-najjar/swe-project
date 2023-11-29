<?php

session_start();

include_once "../includes/dbh.inc.php";
include_once "../Classes/patient.php";
include_once "../Classes/Admin.php";


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['patientIDToDelete'])) {
    // Get the patient ID to be deleted
    $patientIDToDelete = $_POST['patientIDToDelete'];
    $patient = patient::find($patientIDToDelete);
    if($patient){
        $result= Admin::deleteUser($patient);
        if($result){
            echo"Patient with ID $patientIDToDelete has been successfully deleted";
        }else{
            echo"Error deleting patient with ID: $patientIDToDelete";
        }
    }else{
        echo"patient ID $patientIDToDelete doesn't exist ";
    }
    
}
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
            <form id="deleteForm" action="" method="post">
                <h1>delete patient by ID:</h1>
                <input type="text" name="patientID" placeholder="Enter patient's ID"><br>
                <button class="btn" type="submit" value="submit">Delete patient</button>
                <button class="btn" name="cancel" formnovalidate>Cancel</button>
            </form>
        </div>
    </body>
</html>