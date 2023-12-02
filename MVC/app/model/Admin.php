<?php

require_once(__ROOT__ . "model/Model.php");
?>
<!-- $FirstName = $_REQUEST['FirstName'];
		$LastName = $_REQUEST['LastName'];
		$Email = $_REQUEST['Email'];
		$Password = $_REQUEST['Password'];
		$Phonenumber = $_REQUEST['Phonenumber']; -->
<?php
class Admin extends Model {
    private $id;
    private $FirstName;
    private $LastName;
    private $Email;
    private $Password;
    private $Phonenumber;

  function __construct($id,$FirstName="",$LastName="",$Email="",$Password="",$Phonenumber="") {
    $this->id = $id;
	  $this->db = $this->connect();

    if(""===$FirstName){
      $this->findPatient($id);
    }else{
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Email = $Email;
      $this->Password = $Password;
      $this->Phonenumber = $Phonenumber;
    }
  }

  // Apply setter and getter here ..

  //Edit this function to satisfy your needs
  function findPatient($id){
    $sql = "SELECT * FROM patients where ID=".$id;
    // $db = $this->connect();
    // $result = $db->query($sql);
    // if ($result->num_rows == 1){
    //     $row = $db->fetchRow();
    //     $this->name = $row["Name"];
		// $_SESSION["Name"]=$row["Name"];
		// $this->password=$row["Password"];
    //     $this->age = $row["Age"];
		// $this->phone = $row["Phone"];
    // }
    // else {
    //     $this->name = "";
		// $this->password="";
    //     $this->age = "";
		// $this->phone = "";
    }
  }
  

  // Apply your class functions here..
  // function editUser($name, $password, $age, $phone){
  //     $sql = "update user set name='$name',password='$password', age='$age', phone='$phone' where id=$this->id;";
  //       if($this->db->query($sql) === true){
  //           echo "updated successfully.";
  //           $this->readUser($this->id);
  //       } else{
  //           echo "ERROR: Could not able to execute $sql. " . $conn->error;
  //       }

  // }
  
  // function deleteUser(){
	//   $sql="delete from user where id=$this->id;";
	//   if($this->db->query($sql) === true){
  //           echo "deletet successfully.";
  //       } else{
  //           echo "ERROR: Could not able to execute $sql. " . $conn->error;
  //       }
	// }
	 
