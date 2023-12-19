<?php
 
require_once(__ROOT__ . "model/Model.php");


class doctor extends Model {
    public $id; 
    public $Email;
    public $Username;
    public $Password;
 

  function __construct($id,$Email="",$Username="",$Password="") {
    $this->id = $id;
	  $this->db = $this->connect();

    if(""===$Email){
      $this->find($id);
    }else{
      $this->Username = $Username;
      $this->Email = $Email;
      $this->Password = $Password;
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

  function find($id){
    $sql="SELECT * FROM doctors WHERE ID='$id' ";
    $result= $this->db->query($sql);

    if($result -> num_rows>0){
      $row=$result->fetch_assoc();
      $this->id=$row["ID"];
      $this->Email=$row["Email"];
      $this->Username=$row["Username"];
      $this->Password=$row["Password"];
    }
  }
  public function addDoctor($Email, $Username, $Password) {
    // Ensure you have a database connection established here, or include it.
     $sql = "INSERT INTO doctors (Email, FirstName, Password) VALUES ('$Email','$Username','$Password')";
     $result = $this->db->query($sql);
  
     if($result === true){
      echo "admin added successfully.";
      $this->Admin->fillArray();
    } 
    else{
      echo "ERROR: Could not able to execute $sql. " . $this->db->getconn()->error;
    }
  }
    }
   
  ?>