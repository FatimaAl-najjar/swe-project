<?php
session_start();
include_once "../includes/dbh.inc.php";
include_once "../Classes/Admin.php";
$errorMessage="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Email=$_POST["Email"];
    $Password=$_POST["Password"];
    if(!FILTER_Var($Email,FILTER_VALIDATE_EMAIL))
    {
        $errorMessage="invalid email format";
    }
    $sql="SELECT * FROM admin WHERE Email=?";
    $stmt= mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt, "s", $Email);
    
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($result)){
        if($Password === $row['Password']){
            $_SESSION["ID"]=$row["ID"];
            $_SESSION["Username"]=$row["Username"];
            $_SESSION["Email"]=$row["Email"];
            $_SESSION["Password"]=$row["Password"];

            
            header("Location: ./view_patients.php");
        }
        else{
            $errorMessage="<h2>incorrect password</h2>";
        }
    }
    else{
        $errorMessage="incorrect Email";
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