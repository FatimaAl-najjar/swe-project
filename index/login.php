<?php
include_once "../includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>


<?php
include_once "../includes/dbh.inc.php";

session_start();

$errormessage="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    // Validate email (you can add more comprehensive email validation)
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errormessage= "<p style='color: red;'>Invalid email format.</p>";
    } else {
        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM patients WHERE Email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        
        // btakhod data mn db w bt7aded type hena s for string w bt-bind it with the input data 
        mysqli_stmt_bind_param($stmt, "s", $Email);
        //harfeyan btexcute existing query eli talbanaha fo2 
        mysqli_stmt_execute($stmt);

       //bnstore result bt3 stmt
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
          
            if (password_verify($Password, $row["Password"])) {
                // Set session variables
                $_SESSION["ID"] = $row["ID"];
                $_SESSION["FirstName"] = $row["FirstName"];
                $_SESSION["LastName"] = $row["LastName"];
                $_SESSION["Email"] = $row["Email"];
                $_SESSION["Password"] = $row["Password"];
                $_SESSION["Phonenumber"] = $row["Phonenumber"];

                header("Location: homePage.php");
                exit;
            } else {
                $errormessage= "<p style='color: red;'>Incorrect password.</p>";
            }
        } else {
            $errormessage="<p style='color: red;'>Email not found.</p>";
        }
    }
}
?>

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
echo $errormessage;
?>

</body>
</html>