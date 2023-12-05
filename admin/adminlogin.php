<?php
session_start();
include_once "../includes/dbh.inc.php";
include_once "../Classes/Admin.php";
$errorMessage="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Email=$_POST["Email"];
    $Username=$_POST["Username"];
    $Password=$_POST["Password"];
    if(!FILTER_Var($Email,FILTER_VALIDATE_EMAIL))
    {
        $errorMessage="invalid email format";
    }
    
    $admin=Admin::login($Email,$Username,$Password);
   
    if($admin){
        $_SESSION["ID"]=$admin->ID;
        $_SESSION["Username"]=$admin->Username;
        $_SESSION["Email"]=$admin->Email;
        $_SESSION["Password"]=$admin->Password;

        header("Location: ./view_patients.php");
    }
    else{
        $errorMessage="<h2>incorrect email,username or password</h2>";
    }
     
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
</head>
<body>

<h1>Login</h1>
<form action="" method="POST">
    <label>Email:</label>
    <input type="text" placeholder="please enter your email" name="Email" required><br>
    <label>Username:</label>
    <input type="text" placeholder="please enter your usernam" name="Username" required><br>
    <label>Password:</label>
    <input type="password" placeholder="please enter your password" name="Password" required><br>


    <button type="submit" value="submit">Login</button>
     
<?php
echo $errorMessage;
?>
</form>
</body>
</html>