<?php

session_start();
// Include connection
include_once "../includes/dbh.inc.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
// Get the patient ID to be deleted
$patientID = $_POST['patientID'];
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
    <body>
        <form action="" method="post">
            <label>Patient ID:</label>
            <input type="text" name="patientID" placeholder="Enter patient's ID"><br>
            <button class="btn" type="submit" value="submit">Add user</button>
            <button class="btn" name="cancel" formnovalidate>Cancel</button>
        </form>
    </body>
</html>