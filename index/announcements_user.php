<?php
include_once "../includes/dbh.inc.php";

// Retrieve announcements from the database
$sql = "SELECT * FROM announcements ORDER BY date_added DESC";
$result = mysqli_query($conn, $sql);
$announcements = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/announcements.css">
    <title>Announcements</title>
</head>
<body>
<h1>Announcements</h1>

    <!-- Display announcements -->
    <?php foreach ($announcements as $announcement): ?>
        <div class="announcement-card">
            <p class="date"><?php echo date("F j, Y H:i:s", strtotime($announcement['date_added'])); ?></p>
            <p class="content"><?php echo $announcement['announcement']; ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>