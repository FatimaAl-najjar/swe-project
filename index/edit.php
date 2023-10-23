<?php

session_start();

// Include connection
include_once "../includes/dbh.inc.php";
?>
<h1>Edit Profile</h1>

<form action='' method='post'>
	First Name:<br>
	<input type='text' value="<?=$_SESSION['FirstName']?>" name='FirstName'><br>
    Last Name:<br>
	<input type='text' value="<?=$_SESSION['LastName']?>" name='LastName'><br>
	Email:<br>
	<input type='text' value="<?=$_SESSION['Email']?>" name='Email'><br>
	Password:<br>
	<input type='text' value="<?=$_SESSION['Password']?>" name='Password'><br>
	Phone number:<br>
	<input type='text' value="<?=$_SESSION['Phonenumber']?>" name='Phonenumber'><br>
	<input type='submit' value='Submit' name='Submit'>
</form>


<?php
if($_SERVER['REQUEST_METHOD']== "POST"){ //check if form was submitted
	$FirstName=$_POST["FirstName"];
    $LastName=$_POST["LastName"];
	$Email=$_POST["Email"];;
	$Password=$_POST["Password"];
	$Phonenumber=$_POST["Phonenumber"];

	$sql="update  patients set FirstName='$FirstName',LastName='$LastName', Email='$Email', Password='$Password',Phonenumber='$Phonenumber'
	where ID =".$_SESSION['ID'];

	$result=mysqli_query($conn,$sql);
	if($result)	{
		$_SESSION["FirstName"]=$FirstName;
        $_SESSION["LastName"]=$LastName;
		$_SESSION["Email"]=$Email;
		$_SESSION["Password"]=$Password;
		$_SESSION["Phonenumber"]=$Phonenumber;
		header("Location:../index/view_profile.php");
	}
	else {
		echo $sql;
	}
}
?>