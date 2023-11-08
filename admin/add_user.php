<?php
session_start();
include_once "../includes/dbh.inc.php";

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
            // No sessions needed 
            // Set session variables
            // $_SESSION["ID"] = mysqli_insert_id($conn);
            // $_SESSION["FirstName"] = $FirstName;
            // $_SESSION["LastName"] = $LastName;
            // $_SESSION["Email"] = $Email;
            // $_SESSION["Password"] = $Password;
            // $_SESSION["Phonenumber"] = $Phonenumber;

            // Redirect after a successful registration
            header("Location: index.php");
        } else {
            $errorMessage = "<h2>An error occurred during registration.</h2>";
        }
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
    <title>Add user</title>
</head>
<body>
    <div class="card">
        <h1 style="text-align: center;">Add user</h1>
        <form action="" method="post">
            <label>First Name:</label>
            <input type="text" name="FirstName" placeholder="Enter user's first name"><br>
            <label>Last Name:</label>
            <input type="text" name="LastName" placeholder="Enter user's last name"><br>
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Enter user's email"><br>
            <label>Password:</label>
            <input type="password" name="Password" placeholder="Enter user's password"><br>
            <label>Re-enter Password:</label>
            <input type="password" name="repeatPassword" placeholder="Re-enter user's password" required><br>
            <label>Phone number:</label>
            <input type="text" name="Phonenumber" placeholder="Enter user's phone number"><br>
            <button class="btn" type="submit" value="submit">Add user</button>
            <button class="btn" name="cancel" formnovalidate>Cancel</button>
        </form>
        <?php echo $errorMessage; ?>
    </div>
</body>
</html>