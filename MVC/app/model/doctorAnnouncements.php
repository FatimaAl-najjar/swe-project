<?php

require_once(__ROOT__ . "model/Model.php");

class DoctorAnnouncementsModel extends Model {
    public function insertAnnouncement($announcement, $dateAdded) {
        $sql = "INSERT INTO announcements (announcement, date_added) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        // $stmt = mysqli_prepare($this->conn, $sql);
        $stmt->bind_param("ss", $announcement, $dateAdded);
        // $stmt->execute();
        // $stmt->close();
    }
}
?>