<?php
include_once "includes/db.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
    <label>Email:</label>
    <input type="text" placeholder="please enter your email" name="Email"><br>
    <label>password:</label>
    <input type="Password" placeholder="please enter your password" name="Password"><br>
    <button type="submit" value="submit">Login</button>
</form>

<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Email=$_post["Email"];
    $Password=$_Post["Password"];

    //akhod data mn data base b2a
    $sql= "selct * from patients where Email='$Email' and Password='$Password' ";
    $result=mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($result)){
        $_SESSION["ID"]=$row[0];
        $_SESSION["FirstName"]=$row["FisrtName"];
        $_SESSION["LastName"]=$row["LastName"];
        $_SESSION["Email"]=$row["Email"];
        $_SESSION["Password"]=$row["Password"];
        $_SESSION["Phonenumber"]=$row["Phonenumber"];


    }
}
?>
</body>
</html>