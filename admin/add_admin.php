<?php
session_start();
include_once "../includes/dbh.inc.php";
include_once "../Classes/Admin.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminlogin</title>
</head>
<body>
   <?php
   if(isset($_POST['cancel'])){
       header("Location: ../index/homePage.php");
       exit;
   }
   $errormessage="";

   if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Email = $_POST["Email"];
    $Username=$_POST["Username"];
    $Password=$_POST["Password"];
   

   if(empty($Username)||empty($Email)||empty($Password)){
    $errormessage="<h2>please fill the required field</h2>";
   }else{
    $Email = mysqli_real_escape_string($conn, $Email);
    $Username = mysqli_real_escape_string($conn, $Username);
    $Password = mysqli_real_escape_string($conn, $Password);

    $sql="INSERT INTO admin (Email ,Username ,Password) 
        VALUES ('$Email','$Username','$Password')" ;  

    $result=mysqli_query($conn,$sql);

    if($result){
        header("Location: ../adminlogin.php");
        exit;
    }else{
        $errormessage= "<h2>An error occurred during registration.</h2>";
    }
}
}
   ?> 
      <br><br><br>
    <div class="card">
        <form action="" method="post">
           
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Enter your email"><br>
            <label>Username:</label>
            <input type="text" name="Username" placeholder="Enter your Username"><br>
            <label>Password:</label>
            <input type="password" name="Password" placeholder="Enter your password" required><br>
            <div class="clearfix">
            <button class="btn" type="submit" value="submit">add admin</button>
            <button type="button" class="btn">Cancel</button>
            </div>

        </form>
    </div>
    <?php echo $errormessage; ?>

</body>
</html>