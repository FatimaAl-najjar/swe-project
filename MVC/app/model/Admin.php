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
    private $Email;
    private $Username;
    private $Password;
 

  function __construct($id,$Email="",$Username="",$Password="") {
    $this->id = $id;
	  $this->db = $this->connect();

    if(""===$Email){
      $this->find($id);
    }else{
      // $this->FirstName = $FirstName;
      // $this->LastName = $LastName;
      $this->Username = $Username;
      $this->Email = $Email;
      $this->Password = $Password;
      // $this->Phonenumber = $Phonenumber;
    }
  }

  // Apply setter and getter here ..
  function getEmail() {
    return $this->Email;
  }
  function setEmail($Email) {
    return $this->Email = $Email;
  }
  function getUsername() {
    return $this->Username;
  }
  function setUsername($Username) {
    return $this->Username = $Username;
  }
  function getPassword() {
    return $this->Password;
  }
  function setPassword($Password) {
    return $this->Password = $Password;
  }
  function getID() {
    return $this->id;
  }

  //Edit this function to satisfy your needs
  function find($id){
   // $sql = "SELECT * FROM admin where ID=".$id;
    //$db = $this->connect();
    //$result = $db->query($sql);
    //if ($result->num_rows == 1){
    //$row = $db->fetchRow();
    // $this->name = $row["Name"];
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
	 
?>