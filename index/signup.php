
<?php
session_start();
include_once "../includes/dbh.inc.php";
 include "../includes/nav.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="../css/signup.css">
    <title>Sign up</title>
</head>
<body>
    <?php    
        $errorMessage = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $FirstName = $_POST["FirstName"];
            $LastName = $_POST["LastName"];
            $Email = $_POST["Email"];
            $Password = $_POST["Password"];
            $repeatPassword = $_POST["repeatPassword"];
            $Phonenumber = $_POST["Phonenumber"];
            
            if (empty($FirstName) || empty($LastName) || empty($Email) || empty($Password) || empty($repeatPassword) || empty($Phonenumber)) {
                $errorMessage = "<h2>Please fill in all the required fields.</h2>";
            } elseif ($Password !== $repeatPassword) {
                $errorMessage = "<h2>Password mismatch.</h2>";
            } else {
                $FirstName = mysqli_real_escape_string($conn, $FirstName);
                $LastName = mysqli_real_escape_string($conn, $LastName);
                $Email = mysqli_real_escape_string($conn, $Email);
                $Password = mysqli_real_escape_string($conn, $Password);
                $Phonenumber = mysqli_real_escape_string($conn, $Phonenumber);

                $sql = "INSERT INTO patients (FirstName, LastName, Email, Password, Phonenumber) 
                    VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";
    
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    // Redirect after a successful registration
                    header("Location: ../index/login.php");
                    exit;
                } else {
                    $errorMessage = "<h2>An error occurred during registration.</h2>";
                }
            }
        }
    ?>
    
    <br><br><br>
    <div class="card">
        <form action="" method="post">
            <label>First Name:</label>
            <input type="text" name="FirstName" placeholder="Enter your first name"><br>
            <label>Last Name:</label>
            <input type="text" name="LastName" placeholder="Enter your last name"><br>
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Enter your email"><br>
            <label>Password:</label>
            <input type="password" name="Password" placeholder="Enter your password"><br>
            <label>Re-enter Password:</label>
            <input type="password" name="repeatPassword" placeholder="Re-enter your password" required><br>
            <label>Phone number:</label>
            <input type="number" name="Phonenumber" placeholder="Enter your phone number"><br>
            <button type="submit" value="submit">Sign Up</button>
        </form>
    </div>
    <?php echo $errorMessage; ?>
</body>
</html>
