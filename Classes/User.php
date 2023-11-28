<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "clinic";

$conn = mysqli_connect($servername, $username, $password, $DB);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
class User
{
	public $ID;
    public $Email;
    public $Username;
    public $Password;

	function __construct($id)	{
		if ($id !=""){
			$sql="select * from users where 	ID=$id";
			$User = mysqli_query($GLOBALS['con'],$sql);
			if ($row = mysqli_fetch_array($User)){
				$this->ID=$row["ID"];
				$this->$Email=$row["Email"];
				$this->UserName=$row["UserName"];
				$this->Password=$row["Password"];
				
			}
		}
	}
	

}
?>