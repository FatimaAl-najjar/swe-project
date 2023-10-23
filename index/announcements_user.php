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
    // Retrieve announcements from the database
    $sql = "SELECT announcement FROM announcements";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output each announcement as a separate paragraph
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>" . $row["announcement"] . "</p>";
        }
    } else {
        echo "<p>No announcements available.</p>";
    }
    ?>
</body>
</html>