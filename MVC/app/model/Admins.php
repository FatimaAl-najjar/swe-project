<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/Admin.php");

class Admins extends Model {
	private $Admins;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->Admins = array();
		$this->db = $this->connect();
		$result = $this->readAdmins();
		while ($row = $result->fetch_assoc()) {
			array_push($this->Admins, new Admin($row["ID"],$row["Email"],$row["Username"],$row["Password"]));
		}
	}

	function getAdmins() {
		return $this->Admins;
	}

	function readAdmins(){
		$sql = "SELECT * FROM admin";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

    public function insertAdmin($Email, $Username, $Password) {
        $sql = "INSERT INTO admin (Email, Username, Password) VALUES ('$Email', '$Username', '$Password')";
        $result = $this->db->query($sql);
        // Assuming $this->db->query returns a result object
        if ($result === true) {
            echo "Admin inserted successfully.";
            $this->fillArray(); // Assuming you want to fill an array after insertion
        } else {
            echo "ERROR: Could not execute $sql. " . $this->db->getConn()->error;
        }
    }

	public function countPatients() {
		$sql = "SELECT * FROM patients";
        $db = $this->connect();
        $result = $db->query($sql);
		$rowCount = mysqli_num_rows($result);
		// echo $rowCount;
        return $rowCount;
	}

	public function countAdmins() {
		$sql = "SELECT * FROM admin";
        $db = $this->connect();
        $result = $db->query($sql);
		$rowCount = mysqli_num_rows($result);
		// echo $rowCount;
        return $rowCount;
	}

	public function getNamebyID($ID) {
		$sql = "SELECT * FROM admin WHERE ID = $ID";
        $db = $this->connect();
        $result = $db->query($sql);
        if ($result->num_rows == 1){
            $row = $db->fetchRow();
            return $row["Username"];
        }
	}

}