<?php 
session_start();
include '../includes/nav2.php';
include_once "../includes/dbh.inc.php";



$query = "SELECT * FROM patients";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error executing the query: ' . mysqli_error($conn));
}


$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_free_result($result);

foreach ($data as $row) {
    echo "ID: " . $row['ID'] . "<br>";
    echo "First Name: " . $row['FirstName'] . "<br>";
    echo "Last Name: " . $row['LastName'] . "<br>";
    echo "Email: " . $row['Email'] . "<br>";
    echo "Phone number: " . $row['Phonenumber'] . "<br>";
    echo "<br>";
}

?>