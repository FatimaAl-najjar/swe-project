<?php

require_once(__ROOT__ . "controller/Controller.php");

class AnnouncementsController extends Controller {
    public function insert() {
        if (isset($_POST['submit'])) {
            $announcement = $_POST['announcement'];
            $dateAdded = date("Y-m-d H:i:s"); // Get the current date and time

            if (empty(trim($announcement))) {
                echo "Error: Announcement field is required";
            } else {
                // Insert the announcement and current date into the table
                $sql = "INSERT INTO announcements (announcement, date_added) VALUES (?, ?)";
                $stmt = $this->model->getDb()->prepare($sql);
                $stmt->bind_param("ss", $announcement, $dateAdded);
                $stmt->execute();
                $stmt->close();
            }
        }
    }
}
?>