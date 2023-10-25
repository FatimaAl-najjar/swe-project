<?php

session_start();
include '../includes/nav2.php';
// Include connection
include_once "../includes/dbh.inc.php";
?>

<style>

	
.card {
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #484da0;
        }

        /* Full-width input fields */
        input[type=text], input[type=password], input[type=number] {
            width: 93%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
            background-color: #8184c7;
            outline: none;
        }

        label {
            display: inline-block;
            width: 150px;
        }

        .btn1 {
            color: white;
            padding: 15px 25px;
            margin: 9px 0;
            border: none;
            /* cursor: pointer; */
            width: 100%;
			background-color: #484da0;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }

</style>
<br><br><br>
<div class="card">
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
	<input class="btn1" type='submit' value='Submit' name='Submit'>
	<a href="homepage.php"><button type="button" class="btn1">Back</button></a>
</form>
</div>

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
		header("Location:../index/edit.php");
	}
	else {
		echo $sql;
	}
}
?>