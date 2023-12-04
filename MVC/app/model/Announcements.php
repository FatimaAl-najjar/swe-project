<?php

require_once(__ROOT__ . "model/Model.php");

class AnnouncementsModel extends Model {
    private $announcements;

    function __construct() {
        $this->announcements = array();
        $this->db = $this->connect();
        $this->fillArray();
    }

    function fillArray() {
        $sql = "SELECT * FROM announcements ORDER BY date_added DESC";
        $result = $this->db->query($sql);
        while ($row = $result->fetch_assoc()) {
            array_push($this->announcements, $row);
        }
    }

    function getAnnouncements() {
        return $this->announcements;
    }

    
}
?>