<?php
include_once "includes/db.inc.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <form action="" method="post">
    <label>FirstName:</label>
    <input type="text" name="FirstName" placeholder="please enter your firstname"><br>
    <label>LastName:</label>
    <input type="text" name="LastName" placeholder="please enter your lastname"><br>
    <label>Email:</label>
    <input type="text" name="Email" placeholder="please enter your email"><br>
    <label>password:</label>
    <input type="password" name="Password" placeholder="please enter your password:"><br>
    <label>re-enter password</label>
    <input type="password" name="repeatPassword" placeholder="please re-enter your Password" required><br>
    <label>Phone number:</label>
    <input type="number" name="Phonenumber" placeholder="please enter your number"><br>
    <button type="submit" value="submit">Sign up</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $FirstName = htmlspecialchars($_POST["FirstName"]);
        $LastName = htmlspecialchars($_POST["LastName"]);
        $Email = htmlspecialchars($_POST["Email"]);
        $Password = htmlspecialchars($_POST["Password"]);
        $Phonenumber = htmlspecialchars($_POST["Phonenumber"]);
        $sql = "insert into patients(FirstName,LastName,Email,Password,Phonenumber) 
        values('$FirstName','$LastName','$Email','$Password','$Phonenumber')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("location:login.php");
        }
    }
    ?>
</body>
</html>