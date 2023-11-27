<?php

session_start();
// Include connection
include_once "../includes/dbh.inc.php";
include_once "../Classes/patient.php";


if (isset($_GET["user"])) {
    $user = new Patient($_GET["user"]);
}    



if($_SERVER['REQUEST_METHOD']== "POST"){ 

    //check if form was submitted
	$FirstName=$_POST["FirstName"];
    $LastName=$_POST["LastName"];
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$Phonenumber=$_POST["Phonenumber"];

	$sql="update patients set FirstName='$FirstName',LastName='$LastName', Email='$Email', Password='$Password',Phonenumber='$Phonenumber'
	where ID =".$_SESSION['ID'];

	$result=mysqli_query($conn,$sql);
	if($result)	{
		$_SESSION["FirstName"]=$FirstName;
        $_SESSION["LastName"]=$LastName;
		$_SESSION["Email"]=$Email;
		$_SESSION["Password"]=$Password;
		$_SESSION["Phonenumber"]=$Phonenumber;
		header("Location:index.php");
	}
	else {
		echo 'Error editting patient: ' . mysqli_error($conn);
	}
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Patient's data</title>
        <link rel="stylesheet" href="static/css/edit_patient.css">
    </head>

    <body>
        <div class="card">
            <form action='' method='post'>
                <!-- It is not supposed to be session because the session contains admin data  -->
                First Name:<br>
                <input type='text' value="<?=$user->FirstName?>" name="Patient's firstName"><br>
                Last Name:<br>
                <input type='text' value="<?=$user->LastName?>" name="Patient's lastName"><br>
                Email:<br>
                <input type='text' value="<?=$user->Email?>" name="Patient's email"><br>
                Password:<br>
                <input type='text' value="<?=$user->Password?>" name="Patient's password"><br>
                Phone number:<br>
                <input type='text' value="<?=$user->Phonenumber?>" name="Patient's phone number"><br>
                <input class="btn1" type='submit' value='Submit' name='Submit'>
                <a href="index.php"><button type="button" class="btn1">Back</button></a>
            </form>
        </div>
    </body>

</html>