<?php

// require_once(__ROOT__ . "model/Model.php");

// class Feedback extends Model {
//     private $feedbacks;

//     function __construct() {
//         $this->feedbacks = array();
//         $this->db = $this->connect();
//         $this->fillArray();
//     }

//     function fillArray() {
//         $sql = "SELECT * FROM feedback";
//         $result = $this->db->query($sql);
//         while ($row = $result->fetch_assoc()) {
//             array_push($this->feedbacks, $row);
//         }
//     }

//     function getFeedbacks() {
//         return $this->feedbacks;
        
//     }

    
// }

require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	private $ID;
	private $Message;
	private $PatientID;

	function __construct($ID,$Message="",$PatientID="") {
		$this->ID = $ID;
		$this->db = $this->connect();

		if(""===$Message){
			$this->readFeedback($ID);
		}
		else{
			$this->Message = $Message;
			$this->PatientID = $PatientID;
		}
	}

	function getMessage() {
		return $this->Message;
	}	
	function setMessage($Message) {
		return $this->Message = $Message;
	}

	function getPatientID() {
		return $this->PatientID;
	}
	function setPatientID($PatientID) {
		return $this->PatientID = $PatientID;
	}

	function getID() {
		return $this->id;
	}

	function readMessage($ID){
		$sql = "SELECT * FROM feedback where ID=".$ID;
		$db = $this->connect();
		$result = $db->query($sql);
		if ($result->num_rows == 1){
			$row = $db->fetchRow();
			$this->Message = $row["Message"];
			$this->PatientID = $row["PatientID"];
		}
		else {
			$this->Message = "";
			$this->PatientID = "";
		}
	}

	function editFeedback($Message){
		$sql = "update feedback set Message='$Message'where ID=$this->ID;";
		if($this->db->query($sql) === true){
			echo "updated successfully.";
			$this->readMessage($this->ID);
		} else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}

	function deleteFeedback(){
		$sql="delete from feedback where ID=$this->ID;";
		if($this->db->query($sql) === true){
			echo "deleted successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
}
?>