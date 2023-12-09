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

class Feedback extends Model {
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
		return $this->ID;
	}

	function readFeedback($ID){
		$sql = "SELECT * FROM feedback where ID=".$ID;
		$db = $this->connect();
		$result = $db->query($sql);
		if ($result->num_rows == 1){
			$row = $db->fetchRow();
			$this->Message = $row["Message"];
			$this->PatientID = $row["PatientID"];
			$_SESSION["PatientID"] = $row["PatientID"];
		}
		else {
			$this->Message = "";
			$this->PatientID = "";
		}
	}

	function editFeedback($Message){
		$sql = "UPDATE feedback SET Message='$Message'WHERE ID=$this->ID;";
		if($this->db->query($sql) === true){
			echo "updated successfully.";
			$this->readFeedback($this->ID);
		} else{
			echo "ERROR: Could not able to execute $sql. " . $this->conn->error;
		}
	}

	function deleteFeedback(){
		$sql="DELETE FROM feedback WHERE ID=$this->ID;";
		if($this->db->query($sql) === true){
			echo "deleted successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . $this->conn->error;
		}
	}
}
?>