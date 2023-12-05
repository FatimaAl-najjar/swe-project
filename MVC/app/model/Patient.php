<?php
  require_once(__ROOT__ . "model/Model.php");
?>

<?php
class Patient extends Model {
    private $ID;
    private $FirstName;
    private $LastName;
    Private $Email;
    Private $Password;
    private $Phonenumber;

  function __construct($ID,$FirstName="",$LastName="",$Email="",$Password="",$Phonenumber="") {
    $this->ID = $ID;
	    $this->db = $this->connect();

    if(""===$FirstName){
      $this->readPatient($ID);
    }else{
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Email=$Email;
	    $this->Password=$Password;
      $this->Phonenumber = $Phonenumber;
    }
  }
//get and set the first name
  function getFName() {
    return $this->FirstName;
  }
  function setFName($FirstName) {
    return $this->FirstName = $FirstName;
  }
 //get and set the last name 
 function getLName() {
    return $this->LastName;
  }
  function setLName($LastName) {
    return $this->LastName = $LastName;
  }
//get and set the first Email
function getEmail() {
    return $this->Email;
  }
  function setEmail($Email) {
    return $this->Email = $Email;
  }
 // set and get the password
   function getPassword() {
    return $this->Password;
  }
  function setPassword($Password) {
    return $this->Password = $Password;
  }
  // set and get the phonenumber
  function getPhonenumber() {
    return $this->Phonenumber;
  }
  function setPhone($Phonenumber) {
    return $this->Phonenumber = $Phonenumber;
  }
// get the id
  function getID() {
    return $this->ID;
  }

  function readPatient($ID){
    $sql = "SELECT * FROM patients where ID=".$ID;
    $db = $this->connect();
    $result = $db->query($sql);
    if ($result->num_rows == 1){
        $row = $db->fetchRow();
        $this->FirstName = $row["FirstName"];
		$_SESSION["FirstName"]=$row["FirstName"];
        $this->LastName = $row["LastName"];
		 $this->Email = $row["Email"];
         $this->Password=$row["Password"];
		$this->Phonenumber = $row["Phonenumber"];
    }
    else {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Email=$Email;
        $this->Password=$Password;
        $this->Phonenumber = $Phonenumber;
    }
  }
  
  function editPatient($FirstName,$LastName,$Email,$Password,$Phonenumber){
      $sql = "update patients set FirstName='$FirstName',LastName='$LastName', Email='$Email', Password='$Password',Phonenumber='$Phonenumber' where ID=$this->ID;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readPatient($this->ID);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }

  }
  
  function deletePatient(){
	  $sql="delete from patients where ID=$this->ID;";
	  if($this->db->query($sql) === true){
            echo "deleted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
	 
}