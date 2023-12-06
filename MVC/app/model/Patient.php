<?php
  require_once(__ROOT__ . "model/Model.php");
?>

<?php
class Patient extends Model {
    private $ID;
    private $FirstName;
	private $LastName;
    private $Email;
    private $Password;
    private $Phonenumber;

    function __construct($ID, $FirstName="", $LastName="", $Email="", $Password="", $Phonenumber="")
    {
        $this->ID = $ID;
        $this->db = $this->connect();
        if($FirstName === "")
        {
            $this->readPatient($ID);
        }
        else 
        {
            $this->FirstName = $FirstName;
            $this->LastName = $LastName;
            $this->Email = $Email;
            $this->Password = $Password;
            $this->Phonenumber = $Phonenumber;
        }
    }

    function readPatient($ID)
    {
        $sql = "SELECT * FROM patients where ID=" . $ID;
        $db = $this->connect();
        $result = $db->query($sql);
        if ($result->num_rows == 1){
            $row = $db->fetchRow();
            $this->FirstName = $row["FirstName"];
            $this->LastName = $row["LastName"];
            $this->Email = $row["Email"];
            $this->Password = $row["Password"];
            $this->Phonenumber = $row["Phonenumber"];
        }
        else {
            $this->FirstName = "";
            $this->LastName="";
            $this->Email = "";
            $this->Password = "";
            $this->Phonenumber = "";
        }
    }
    
    function editPatient($FirstName, $LastName, $Email, $Password, $Phonenumber)
    {
        $sql = "UPDATE patients SET FirstName='$FirstName',LastName='$LastName',
                Email='$Email', Password='$Password',Phonenumber='$Phonenumber' 
                WHERE ID=$this->ID;";
        if($this->db->query($sql) === true){
            echo "Updated successfully.";
            $this->readPatient($this->ID);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }

    }
  
    function deletePatient() {
        $sql = "DELETE FROM patients WHERE ID=$this->ID;";
        if($this->db->query($sql) === true)
        {
            echo "Deleted successfully!";
        }
        else 
        {
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
    }
	 
    function getFirstName() {
        return $this->FirstName;
    }

    function getLastName() {
        return $this->LastName;
    }

    function getEmail() {
        return $this->Email;
    }

    function getPassword() {
        return $this->Password;
    }

    function getPhonenumber() {
        return $this->Phonenumber;
    }

    function setFirstName($FirstName) {
        return $this->FirstName = $FirstName;
    }

    function setLastName($LastName) {
        return $this->LastName = $LastName;
    }

    function setEmail($Email) {
        return $this->Email = $Email;
    }

    function setPassword($Password) {
        return $this->Password = $Password;
    }

    function setPhonenumber($Phonenumber) {
        return $this->Phonenumber = $Phonenumber;
    }
}