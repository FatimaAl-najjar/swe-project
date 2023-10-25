<?php 
session_start();
include '../includes/nav2.php';
include_once "../includes/dbh.inc.php";



$query = "SELECT * FROM patients";
$result = mysqli_query($connection, $query);

if (!$result) {
    die('Error executing the query: ' . mysqli_error($connection));
}

?>