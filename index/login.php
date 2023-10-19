<?php
include_once "../includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
    <label>Email:</label>
    <input type="text" placeholder="please enter your email" name="Email"><br>
    <label>password:</label>
    <input type="Password" placeholder="please enter your password" name="Password"><br>
    <button type="submit" value="submit">Login</button>
</form>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM patients WHERE Email = ? AND Password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ss", $Email, $Password);

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_array($result)) {
        // Set session variables
        $_SESSION["ID"] = $row[0];
        $_SESSION["FirstName"] = $row["FirstName"];
        $_SESSION["LastName"] = $row["LastName"];
        $_SESSION["Email"] = $row["Email"];
        $_SESSION["Password"] = $row["Password"];
        $_SESSION["Phonenumber"] = $row["Phonenumber"];

        // Redirect after a successful login
        header("Location:signup.php");
        exit;
    }
}
?>
</body>
</html>