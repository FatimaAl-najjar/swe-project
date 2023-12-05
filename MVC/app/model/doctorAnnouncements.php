<?php

require_once(__ROOT__ . "model/Model.php");

class DoctorAnnouncementsModel extends Model {
    private $id;
    private $announcement;
    private $dateAdded;
     

    function __construct($id, $announcement = "", $dateAdded = "") {
        $this->id = $id;
        $this->db = $this->connect();

        // if ("" === $name) {
        //     $this->readAppointment($id);
        // } else {
        //     $this->name = $name;
        //     $this->date = $date;
        //     $this->time = $time;
        // }
    }

    function getannouncement() {
        return $this->announcement;
    }

    function setannouncement($announcement) {
        return $this->announcement = $announcement;
    }

    function getdateAdded() {
        return $this->dateAdded;
    }

    function setdateAdded($dateAdded) {
        return $this->dateAdded = $dateAdded;
    }

  

    function getID() {
        return $this->id;
    }
    public function insertAnnouncement($announcement, $dateAdded) {
        $sql = "INSERT INTO announcements (announcement, date_added) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        // $stmt = mysqli_prepare($this->conn, $sql);
        $stmt->bind_param("ss", $announcement, $dateAdded);
        $stmt->execute();
        $stmt->close();
    }
}
?>