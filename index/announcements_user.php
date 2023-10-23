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
        while ($row = mysqli_fetch_assoc($result)) {
            $announcement = $row["announcement"];
            $dateAdded = date("Y-m-d", strtotime($row["date_added"]));
            $timeAdded = date("H:i:s", strtotime($row["date_added"]));
    
            // Get the current date and time
            $currentDate = date("Y-m-d");
            $currentTime = date("H:i:s");
    
    // Calculate the difference in days between the current date and the date the announcement was added
    $daysDifference = floor((strtotime($currentDate) - strtotime($dateAdded)) / (60 * 60 * 24));
        }    
        
    }else {
        echo "<p>No announcements available.</p>";
    }
    ?>
</body>
</html>