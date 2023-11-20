<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "clinic";

$conn = mysqli_connect($servername, $username, $password, $DB);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

class Admin{
    public $Email;
    public $Username;
    public $Password;
    
    function __construct($id){
        $sql="SELECT * FROM admin where ID=$id";
        $admin= mysqli_query($GLOBALS['con'],$sql);
        if($row= mysqli_fetch_array($admin)){
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
        $result=mysqli_query($GLOBALS['con'],$sql);
        if($row=mysqli_fetch_array($result)){
            return new Admin($row["ID"]);
        }
        return NULL;
    }

    static function addadmin($Email,$Username,$Password)
    {
        $sql="INSERT INTO admin (Email, Username, Password) VALUES ('$Email','$Username','$Password')";
        if(mysqli_query($GLOBALS['con'],$sql)){
            return true;
        }
        else{
            return false;
        }
    }

    static function deleteadmin($objAdmin){
        $sql="DELETE FROM admin WHERE ID=".$ObjAdmin->ID;
        if(mysqli_query($GLOBALS['con'],$sql)){
            return true;
        }else{
            return false;
        }
    }

    
}


?>