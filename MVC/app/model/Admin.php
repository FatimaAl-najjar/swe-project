<?php
 
require_once(__ROOT__ . "model/Model.php");

class Admin extends Model {
    public $ID; 
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
    $sql="SELECT * FROM admin WHERE ID='$id' ";
    $result= $this->db->query($sql);

    if($result -> num_rows>0){
      $row=$result->fetch_assoc();
      $this->id=$row["ID"];
      $this->Email=$row["Email"];
      $this->Username=$row["Username"];
      $this->Password=$row["Password"];
    }
  }

  function addadmin(){
    $Email=$this->getEmail();
    $Username=$this->getUsername();
    $Password=$this->getUsername();

    if($this->getID()){
      $sql="UPDATE admin SET Email='$Email' , Username='$Username', Password='$Password' WHERE ID=".$this->getID();
    }else{
      $sql="INSERT INTO admin(Email , Username , Password) VALUES ($Email,$Username,$Password)";
    }
    return $this->db->query($sql);
  }

  function deleteadmin(){
    $sql= "DELETE FROM admin WHERE ID=".$this->getID();
    if($this->db->query($sql) === true)
    {
        echo "Deleted successfully!";
    }
    else 
    {
        echo "ERROR: Could not able to execute $sql. " .  $this->db->error;
    return $this->db->query($sql);
   }

   }
   public function adminLogin($email, $username, $password) {
    $sql = "SELECT * FROM admin WHERE Email='$email' AND Username='$username' AND Password='$password'";
    $result = $this->db->query($sql);

    if ($row = mysqli_fetch_array($result)) {
        return new Admin($row["ID"]);
    }

    return null;
}
  }
?>