<?php 
$servername = "localhost";
$username = "root";
$password = "";
$DB = "clinic";

$conn = mysqli_connect($servername, $username, $password, $DB);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

class Doctor{
    public $Email;
    public $Username;
    public $Password;

    function __construct($id){
        $sql="SELECT * FROM admin where ID=$id";
        $admin= mysqli_query($GLOBALS['conn'],$sql);
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
			return new Doctor($row[0]); 		
		}
		return NULL;
    }

    static function addAnnouncement($announcement,$date_added){
        $sql = "INSERT INTO announcements (announcement, date_added) VALUES (?, ?)";
        if(mysqli_query($GLOBALS['conn'],$sql)) {
            echo'announcement added succesfully!';
			return true;
        }
		else {
            echo 'Error adding announcement: ' . mysqli_error( $GLOBALS['conn'] );
			return false;
        }
    }

}

?>