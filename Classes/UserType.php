<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "clinic";

$conn = mysqli_connect($servername, $username, $password, $DB);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
class UserType{

public $ID;
	public $UserTypeName;
	public $ArrayOfPages;
	function __construct($id){
		if ($id !=""){
			$sql="select * from usertypes where ID=$id";
			$result=mysqli_query($GLOBALS['con'],$sql);
			if ($row = mysqli_fetch_array($result))	{
				$this->UserTypeName=$row["Name"];
				$this->ID=$row["ID"];
				$sql="select PageID from UserType_Pages where UserTypeID=$this->ID";
				$result=mysqli_query($GLOBALS['con'],$sql);
				$i=0;
				while($row1=mysqli_fetch_array($result)){
					$this->ArrayOfPages[$i]=new pages($row1[0]);
					$i++;
				}
			}
		}
	}
	
	static function SelectAllUserTypesInDB(){
		$sql="select * from usertypes";
		$TypeDataSet = mysqli_query($GLOBALS['con'],$sql);
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($TypeDataSet))	{
			$MyObj= new UserType($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
	}
}
    ?>