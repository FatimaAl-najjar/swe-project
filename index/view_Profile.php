<?php
session_start();
include_once "../includes/dbh.inc.php";

// Redirect to login page if user is not logged in
if (!isset($_SESSION["ID"])) {
    header("Location: ../index/login.php");
    exit;
}

include '../includes/nav2.php';

// Fetch user information from the database
$userId = $_SESSION["ID"];
$sql = "SELECT * FROM patients WHERE ID = '$userId'";
$result = mysqli_query($conn, $sql);
$userInfo = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/.css" />
    
    <title>View Profile</title>
</head>
<body>
    <section class="home">
        <div class="form-container">
            <i class="uil uil-times form_close"></i>
            <div class="form view_form">
                <form action="#">
                    <div class="card">
                        <h2 style="text-align: center;">My Profile</h2>
                        <br><hr><br>
                        <div class="profile-info">
                            <p class="profile-label">User Name:</p>
                            <p class="profile-value"><?php echo $userInfo["FirstName"] . " " . $userInfo["LastName"]; ?></p>

                            <p class="profile-label">Email:</p>
                            <p class="profile-value"><?php echo $userInfo["Email"]; ?></p>

                            <p class="profile-label">Phone Number:</p>
                            <p class="profile-value"><?php echo $userInfo["Phonenumber"]; ?></p>
                            <a href="../index/homepage.php">back</a>
                            <a href="../index/edit.php">edit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<footer><?php include '../includes/footer.php'; ?></footer>
</html>
