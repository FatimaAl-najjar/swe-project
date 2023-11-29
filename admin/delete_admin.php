<?php
session_start();
// Include connection
include_once "../includes/dbh.inc.php";
// Include admin class
include_once "../Classes/Admin.php";
if($_SERVER["REQUEST_METHOD"]=="POST "&& isset($_POST['adminIDToDelete'])){
    $adminIDToDelete=$_POST['adminIDToDelete'];
    $admin= Admin::find($adminIDToDelete);
    if($admin){
        $result=Admin::deleteadmin($admin);
        if($result){
            echo"Admin with ID $adminIDToDelete has been successfully deleted ";
        }else{
            echo"Error deleting with ID $adminIDToDelete ";
        }
    }
    else{
        echo"Admin Id $adminIDToDelete doesn't exist ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Delete admin </title>
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
            <h1>Delete Admin by ID:</h1>
            <input type="text" name="adminIDToDelete" placeholder="Enter admin's ID"><br>
            <button class="btn" type="submit" value="submit">Delete Admin</button>
            <button class="btn" name="cancel" formnovalidate>Cancel</button>
        </form>
    </div>
</body>
</html>
