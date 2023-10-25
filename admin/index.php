<?php
session_start();
include '../includes/nav2.php';
include_once "../includes/dbh.inc.php";

?>


<h1 style="text-align: center">Admin dashboard</h1>
<h5 style="text-align: center">For now Aked...</h5>

<?php
$query = "SELECT * FROM patients";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error executing the query: ' . mysqli_error($conn));
}

$rowCount = mysqli_num_rows($result);

?>
<h1>Statistics here..</h1>
<h1>Number of patients: <?php echo "$rowCount"?></h1>

<a href="announcements.php"><button type="button">Announcements</button></a>
<br>
<a href="view_patients.php"><button type="button">Patients data</button></a>