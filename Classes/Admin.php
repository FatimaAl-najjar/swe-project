<?php
require_once 'User.php';
$servername = "localhost";
$username = "root";
$password = "";
$DB = "clinic";

$conn = mysqli_connect($servername, $username, $password, $DB);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

class Admin extends User{
    public $ID;
    public $Email;
    public $Username;
    public $Password;
    
    function __construct($id){
        $sql="SELECT * FROM admin where ID=$id";
        $admin= mysqli_query($GLOBALS['conn'],$sql);
        if($row= mysqli_fetch_array($admin)){
            $this->ID = $row["ID"];
            $this->Email=$row["Email"];
            $this->Username=$row["Username"];
            $this->Password=$row["Password"];
        }
    }

    static function find($id) {
        $sql= "SELECT * FROM admin WHERE ID='$id'";
        $result=mysqli_query($GLOBALS['conn'],$sql);
		if ($row=mysqli_fetch_array($result)){
			return new Admin($row[0]); 		
		}
		return NULL;
    }

    static function login($Email,$Username,$Password){
        $sql="SELECT * FROM admin WHERE Email='$Email' and Username='$Username' and Password ='$Password'";
        $result=mysqli_query($GLOBALS['conn'],$sql);
        if($row=mysqli_fetch_array($result)){
            return new Admin($row["ID"]);
        }
        return NULL;
    }

    static function addadmin($Email,$Username,$Password)
    {
        $sql="INSERT INTO admin (Email, Username, Password) VALUES ('$Email','$Username','$Password')";
        if(mysqli_query($GLOBALS['conn'],$sql)){
            return true;
        }
        else{
            return false;
        }
    }

    static function deleteadmin($objAdmin){
        $sql="DELETE FROM admin WHERE ID=" .$objAdmin->ID;
        if(mysqli_query($GLOBALS['conn'],$sql)){
            return true;
        }else{
            return false;
        }
    }

    /*static function deleteadmin($objAdmin) {
        $sql = "DELETE FROM admin WHERE ID=" . $objAdmin->ID;
    
        if (mysqli_query($GLOBALS['conn'], $sql)) {
            return true;
        } else {
            return false;
        }
    }*/

    static function addUser($FirstName, $LastName, $Email, $Password, $Phonenumber)	{
		$sql = "INSERT INTO patients (FirstName, LastName, Email, Password, Phonenumber) 
        VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";
		if(mysqli_query($GLOBALS['conn'],$sql)) {
            echo'Patient added succesfully!';
			return true;
        }
		else {
            echo 'Error adding patient: ' . mysqli_error( $GLOBALS['conn'] );
			return false;
        }
	}

    function editUser(){
		$sql = "UPDATE patients SET FirstName ='.$this->FirstName.' ,LastName='$this->LastName' ,Password='$this->Password' where ID = ".$this->ID;
		if(mysqli_query($GLOBALS['conn'],$sql)) {
            echo 'Patient updated successfully!';
			return true;
        }
		else {
            echo 'Error updating patient: '. mysqli_error( $GLOBALS['conn'] );
			return false;
        }	
	}	

    static function deleteUser($ObjPatient){
		$sql = "DELETE FROM patients WHERE ID = " . $ObjPatient->ID;
		if (mysqli_query($GLOBALS['conn'],$sql)) {
            echo 'Patient DELETED successfully!';
			return true;
        }        
		else {
            echo 'Error deleting patient: '. mysqli_error($GLOBALS['conn']);
			return false;
        }
	}



    
}


?>