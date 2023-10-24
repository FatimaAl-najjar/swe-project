<?php 
session_start();
include '../includes/nav2.php';
include_once "../includes/dbh.inc.php";

 ?>

<head>
    <title>View Profile</title>
    <!-- <link rel="stylesheet" href="../css/viewProfile.css"> -->
</head>
<body>
    <?php
// Check if the user is logged in or signed up
if (isset($_SESSION["ID"])) {
    // User is logged in or signed up
    $firstName = $_SESSION["firstName"];
    $lastName = $_SESSION["lastName"];
    $email = $_SESSION["Email"];
    $password = $_SESSION["Password"];
 
    // Redirect to the login or signup page
    header("Location: view_Profile.php");
    exit();
}
?> 
    <!-- Header  -->
    <h5>navbar here...</h5>
    <!-- Home  -->
    <section class="home">
        <div class="form-container">
            <i class="uil uil-times form_close"></i>
            <!-- Form  -->
            <div class="form view_form"></div>
            <form action="#">
                <h2 style="text-align: center;">My profile</h2>
                <br><hr><br>
                <div class="profile-info">
                    <p class="profile-label">User Name:</p>
                    <p class="profile-value"><?php  echo $firstName . " " . $lastName; ?></p>
  
                    <p class="profile-label">Email:</p>
                    <p class="profile-value"><?php echo $email; ?></p>
                        
                    <p class="profile-label">Password:</p>
                    <p class="profile-value"><?php echo $password; ?></p>
                </div>
            </form>
        </div>
    </section>
    
    
</body>
<footer><?php include '../includes/footer.php';?></footer>