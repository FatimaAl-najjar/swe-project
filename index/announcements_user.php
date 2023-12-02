<?php
// session_start();
include_once "../includes/dbh.inc.php";
include_once "../admin/announcements.php";
// include_once "announcements.php";

$adminForm = new AdminAnnouncementForm($conn);
$clientAnnouncements = new ClientAnnouncements($conn);

// $adminForm->addAnnouncement();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $clientAnnouncements->renderAnnouncements($clientAnnouncements->getAnnouncements());
}
// } else {
//     $adminForm->renderForm();
// }

include '../includes/footer.php';
?>

 
<?php

class ClientAnnouncements
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAnnouncements()
    {
        $sql = "SELECT * FROM announcements ORDER BY date_added DESC";
        $result = mysqli_query($this->conn, $sql);
        $announcements = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $announcements;
    }

    public function renderAnnouncements($announcements)
    {
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
                <img class="icon" src="../images/megaphone.jpg" alt="Microphone Icon">
                <div>
                    <p class="date"><?php echo date("F j, Y H:i:s", strtotime($announcement['date_added'])); ?></p>
                    <p class="content"><?php echo $announcement['announcement']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        </body>
        </html>
        <?php
    }
}
?>