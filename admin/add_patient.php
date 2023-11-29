<?php
session_start();
include_once "../includes/dbh.inc.php";
include_once "../Classes/patient.php";
include_once "../Classes/Admin.php";

$errorMessage = "";


    $FirstName = isset($_POST["FirstName"])? $_POST["FirstName"]:"";
    $LastName = isset($_POST["LastName"])?$_POST["LastName"]:"";
    $Email = isset($_POST["Email"]) ? $_POST["Email"] : "";
    $Password = isset($_POST["Password"])?$_POST["Password"]:"";
    $repeatPassword = isset($_POST["repeatPassword"])?$_POST["repeatPassword"]:"";
    $Phonenumber = isset($_POST["Phonenumber"])?$_POST["Phonenumber"]:"";

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

        /*$sql = "INSERT INTO patients (FirstName, LastName, Email, Password, Phonenumber) 
            VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";
        */
        $result = Admin::addUser($FirstName, $LastName, $Email, $Password, $Phonenumber);
        if ($result) {
            // Redirect after a successful registration
            echo "User added successfully";
            header("Location: index.php");
        } else {
            $errorMessage = "<h2>An error occurred during registration.</h2>";
        }
    }


// Cancel button functionality
if (isset($_POST['cancel'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Add patient</title>
</head>
<body>
    <div class="card">
        <h1 style="text-align: center;">Add patient</h1>
        <form action="" method="post">
            <label>First Name:</label>
            <input type="text" name="FirstName" placeholder="Enter patient's first name"><br>
            <label>Last Name:</label>
            <input type="text" name="LastName" placeholder="Enter patient's last name"><br>
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Enter patient's email"><br>
            <label>Password:</label>
            <input type="password" name="Password" placeholder="Enter patient's password"><br>
            <label>Re-enter Password:</label>
            <input type="password" name="repeatPassword" placeholder="Re-enter patient's password" required><br>
            <label>Phone number:</label>
            <input type="text" name="Phonenumber" placeholder="Enter patient's phone number"><br>
            <button class="btn" type="submit" value="submit">Add patient</button>
            <button class="btn" name="cancel" formnovalidate>Cancel</button>
        </form>
        <?php echo $errorMessage; ?>
    </div>
</body>
</html>