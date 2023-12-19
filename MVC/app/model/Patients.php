<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/Patient.php");

class Patients extends Model {
	private $patients;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->patients = array();
		$this->db = $this->connect();
		$result = $this->readPatients();
		while ($row = $result->fetch_assoc()) {
			array_push($this->patients, new Patient($row["ID"],$row["FirstName"],$row["LastName"],$row["Email"],$row["Password"],$row["Phonenumber"]));
		}
	}

	function isAdmin ($Email) {
		$sql = "SELECT * FROM admin WHERE Email='$Email'";
        $db = $this->connect();
        $result = $db->query($sql);
        if ($result->num_rows == 1)
        {
            return true;
        }
        return false;
	}

	function getPatients() {
		return $this->patients;
	}

	function readPatients(){
		$sql = "SELECT * FROM patients";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertPatient($FirstName, $LastName, $Email, $Password, $Phonenumber){
		$sql = "INSERT INTO patients (FirstName, LastName, Email, Password, Phonenumber) VALUES ('$FirstName','$LastName', '$Email', '$Password', '$Phonenumber')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $this->conn->error;
		}
	}
}