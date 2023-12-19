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

  public function addPatient($FirstName, $LastName, $Email, $Password, $Phonenumber) {
    $sql = "INSERT INTO patients (FirstName, LastName, Email, Password, Phonenumber) 
        VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";

    $result = $this->db->query($sql);

    if ($result === true) {
        echo "Patient added successfully.";
        // You may want to redirect or perform additional actions after adding a patient
    } else {
        echo "ERROR: Could not add patient. " . $this->db->getConn()->error;
    }
}
public function deletePatient($patientID) {
  $sql = "DELETE FROM patients WHERE ID = $patientID";
  $result = $this->db->query($sql);

  if ($result === true) {
      return true;
  } else {
      return $this->db->getConn()->error;
  }
}
 
public function editPatient($patientID, $data) {
  // $data is an associative array containing the updated patient information
  $setValues = [];
  foreach ($data as $key => $value) {
      $setValues[] = "$key = '$value'";
  }

  $setValuesString = implode(', ', $setValues);
  $sql = "UPDATE patients SET $setValuesString WHERE ID = $patientID";
  $result = $this->db->query($sql);

  if ($result === true) {
      return true;
  } else {
      return $this->db->getConn()->error;
  }
}


  public function deleteAdmin($id) {
    $sql = "DELETE FROM admin WHERE ID=$id";
    $result = $this->db->query($sql);

    if ($result === true) {
        return true;
    } else {
        return $this->db->getConn()->error;
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
   public function addadmin($Email, $Username, $Password) {
  // Ensure you have a database connection established here, or include it.
   $sql = "INSERT INTO admin (Email, Username, Password) VALUES ('$Email','$Username','$Password')";
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