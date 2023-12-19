<?php
session_start();
include_once "../includes/dbh.inc.php";

if (isset($_GET['action']) && !empty($_GET['action'])) {
    switch($_GET['action']){
		case 'Logout':
			session_destroy();
			header("Location:login.php");
			break;
	}
}
$errormessage="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errormessage = "<script>alert('Invalid Email Format');</script>";

    } else {
        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM patients WHERE Email = ?";
        $stmt = mysqli_prepare($conn, $sql);

        // Bind parameter
        mysqli_stmt_bind_param($stmt, "s", $Email);

        // Execute the query
        mysqli_stmt_execute($stmt);

        // Get the result
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            // Verify the password
            if ($Password === $row["Password"]) {
                // Set session variables
                $_SESSION["ID"] = $row["ID"];
                $_SESSION["FirstName"] = $row["FirstName"];
                $_SESSION["LastName"] = $row["LastName"];
                $_SESSION["Email"] = $row["Email"];
                $_SESSION["Password"] = $row["Password"];
                $_SESSION["Phonenumber"] = $row["Phonenumber"];

                // Redirect after a successful login
                header("Location: ../index/homePage.php");
                exit;
            } else {
                $errormessage = "<script>alert('Incorrect password.');</script>";
            }
        } else {
            $errormessage = "<script>alert('Invalid Email Format');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<?php
include "../includes/nav.php";
?>
<br><br><br><br>

<div class="card">
    <h1>Login</h1>
<form action="" method="POST">
    <label>Email:</label>
    <input type="text" placeholder="please enter your email" name="Email" required><br>
    <label>Password:</label>
    <input type="password" placeholder="please enter your password" name="Password" required><br>
    <button class="btn" type="submit" value="submit">Login</button>
    <a href="landing.php"><button type="button" class="btn">Back</button></a>     </form>
</div>
<?php
echo $errormessage;
?>

 
</body>
</html>