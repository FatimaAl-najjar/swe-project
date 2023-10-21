<?php 
session_start();
include '../includes/nav.php';
include_once "../includes/dbh.inc.php";
?> 

<head>
    <title>View Profile</title>
    <!-- <link rel="stylesheet" href="../css/viewProfile.css"> -->
</head>
<body>
    <!-- Header  -->
    <h5>navbar here...</h5>
    <!-- Home  -->
    <section class="home">
        <div class="form-container">
            <i class="uil uil-times form_close"></i>
            <!-- Form  -->
            <div class="form view_form"></div>
            <form action="#">
                <h2>My profile</h2>
                <br><hr><br>
                <div class="profile-info">
                    <p class="profile-label">User Name:</p>
                    <p class="profile-value"><?php echo $_SESSION["FirstName"] . " " . $_SESSION["LastName"]; ?></p>
                        
                    <p class="profile-label">Email:</p>
                    <p class="profile-value"><?php echo $_SESSION["Email"]; ?></p>
                        
                    <p class="profile-label">Password:</p>
                    <p class="profile-value"><?php echo $_SESSION["Password"]; ?></p>
                </div>
            </form>
        </div>
    </section>
    
    
</body>
<footer><?php include '../includes/footer.php';?></footer>