<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/Feedback.php");

class Feedbacks extends Model {
	private $feedbacks;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->feedbacks = array();
		$this->db = $this->connect();
		$result = $this->readFeedbacks();
		while ($row = $result->fetch_assoc()) {
			array_push($this->feedbacks, new Feedback($row["ID"], $row["Message"], $row["PatientID"]));
		}
	}

	function getFeedbacks() {
		$this->fillArray();  
		return $this->feedbacks;
	}

	function getFeedback($ID) {
		foreach($this->feedbacks as $feedback) {
			if ($ID == $feedback->getID()) {
				return $feedback;
			}
		}
	}

	function readFeedbacks(){
		$sql = "SELECT * FROM feedback";
		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertFeedback($Message) {
		$sql = "INSERT INTO feedback (PatientID, Message) VALUES ('".$_SESSION['ID']."','$Message')";
		if ($this->db->query($sql) === true) {
			$Messageerror = "Thank you for your feedback";
			$this->fillArray();
	
			echo "<script>alert('$Messageerror');</script>";
		} else {
			echo "ERROR: Could not able to execute $sql. " . $this->db->error;
		}
	}
}