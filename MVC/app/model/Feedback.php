<?php
require_once(__ROOT__ . "model/Model.php");

class Feedback extends Model {
    private $ID;
    private $Patient;
    private $Message;

    function __construct($ID, $Patient = null, $Message = "") {
        $this->ID = $ID;
        $this->db = $this->connect();

        if ($Patient === null) {
            $this->readFeedback($ID);
        } else {
            $this->Patient = $Patient;
            $this->Message = $Message;
        }
    }

    function readFeedback($ID) {
        $sql = "SELECT * FROM feedback WHERE ID=" . $ID;
        $db = $this->connect();
        $result = $db->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $PatientID = $row["PatientID"];
            $this->Patient = new Patient($PatientID);
            $this->Message = $row["Message"];
        } else {
            $this->Patient = null;
            $this->Message = "";
        }
    }

    function addFeedback($Patient, $Message) {
        $PatientID = $Patient->getID();
        $sql = "INSERT INTO feedback (PatientID, Message) VALUES ('$PatientID', '$Message')";
        if ($this->db->query($sql) === true) {
            echo "Feedback added successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . $this->db->error;
        }
    }

    function editFeedback($Patient, $Message) {
        $PatientID = $Patient->getID();
        $sql = "UPDATE feedback SET PatientID='$PatientID', Message='$Message' WHERE ID=$this->ID;";
        if ($this->db->query($sql) === true) {
            echo "Feedback updated successfully.";
            $this->readFeedback($this->ID);
        } else {
            echo "ERROR: Could not able to execute $sql. " . $this->db->error;
        }
    }

    function deleteFeedback() {
        $sql = "DELETE FROM feedback WHERE ID=$this->ID;";
        if ($this->db->query($sql) === true) {
            echo "Feedback deleted successfully!";
        } else {
            echo "ERROR: Could not able to execute $sql. " . $this->db->error;
        }
    }

    function getPatient() {
        return $this->Patient;
    }

    function getMessage() {
        return $this->Message;
    }

    function setPatient($Patient) {
        $this->Patient = $Patient;
    }

    function setMessage($Message) {
        $this->Message = $Message;
    }
}
?>