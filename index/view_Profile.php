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
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    
    <title>View Profile</title>
    <style>
     .card1 {
       border: 3px solid #484da0;
        border-radius: 10px;
        padding: 25px;
        margin: 25px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile-info {
        text-align: center;
        margin-top: 20px;
    }

    .profile-label {
        font-weight: bold;
        font-size:20px;
        margin-bottom: 20px;
    }

    .profile-value {
        margin-top: 5px;
        font-size:20px;
        margin-bottom: 20px;
    }

     a {
        margin-right: 10px;
        text-decoration: none;
        color: blue;
    }

    .button-link {
        display: inline-block;
        padding: 15px 23px;
        background-color: #484da0;
        border: none;
        color: #fff;
        text-decoration: none;
        font-size:20px;
        cursor: pointer;
        border-radius: 4px;
    }

    .button-link:hover {
        background-color: #8b8ecb;
    }
    </style>
</head>
<body>
    <br><br><br>
    <section class="home">
        <div class="form-container">
            <i class="uil uil-times form_close"></i>
            <div class="form view_form">
                <form action="#">
                    <div class="card1">
                        <h2 style="text-align: center;">My Profile</h2>
                        <br><hr><br>
                        <div class="profile-info">
                            <label for="username" class="profile-label">User Name:</label>
                            <p class="profile-value"><?php echo $userInfo["FirstName"] . " " . $userInfo["LastName"]; ?></p>

                            <label for="email" class="profile-label">Email:</label>
                            <p class="profile-value"><?php echo $userInfo["Email"]; ?></p>

                            <label for="phone" class="profile-label">Phone Number:</label>
                            <p class="profile-value"><?php echo $userInfo["Phonenumber"]; ?></p>

                            <a href="../index/homepage.php" class="button-link">&#128072; Back</a>
                            <a href="../index/edit.php" class="button-link">&#9997; Edit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<footer><?php include '../includes/footer.php'; ?></footer>
</html>