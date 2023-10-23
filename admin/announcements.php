<?php
session_start();
include_once "../includes/dbh.inc.php";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
</head>
<body>
<?php
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $announcement = $_POST["announcements"]; // Retrieve the announcement from the form

    // Prepare the SQL statement with a prepared statement to prevent SQL injection
    $sql = "INSERT INTO announcements (announcement) VALUES (?)";

    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $announcement);
        mysqli_stmt_execute($stmt);

        // Redirect after a successful announcement
        header("Location: announcements.php");
        exit;
    } else {
        $errorMessage = "<h2>Failed to announce.</h2>";
    }
}
?>
    <form action="" method="post"> 
    <label>please write here your announcement:</label>
    <input type="text" name="announcements" placeholder="Enter your announcement" class="box">
    <input type="submit" value="submit">
    </form>
    
</body>

 
</html>

 