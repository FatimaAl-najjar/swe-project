<?php

require_once(__ROOT__ . "model/Model.php");

class Feedback extends Model {
    private $feedbacks;

    function __construct() {
        $this->feedbacks = array();
        $this->db = $this->connect();
        $this->fillArray();
    }

    function fillArray() {
        $sql = "SELECT * FROM feedback";
        $result = $this->db->query($sql);
        while ($row = $result->fetch_assoc()) {
            array_push($this->feedbacks, $row);
        }
    }

    function getFeedbacks() {
        return $this->feedbacks;
        
    }

    
}
?>