<?php
session_start();
include_once "../includes/dbh.inc.php";

if (isset($_POST['submit'])) {
    $announcement = $_POST['announcement'];
    $dateAdded = date("Y-m-d H:i:s"); // Get the current date and time

    // Insert the announcement and current date into the table
    $sql = "INSERT INTO announcements (announcement, date_added) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $announcement, $dateAdded);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
</head>
<body>
    <!-- Form for adding new announcements -->
    <form method="POST" action="">
        <textarea name="announcement" placeholder="Enter announcement"></textarea>
        <button type="submit" name="submit">Add Announcement</button>
    </form>
 
 </body>
</html>