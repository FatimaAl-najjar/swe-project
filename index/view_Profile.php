<?php
session_start();

// echo "User Name:" . $_SESSION["FirstName"]. " ". $_SESSION["LastName"]. "<br>";
// echo "Email:" . $_SESSION["Email"]."<br>";
// echo "Password:" . $_SESSION["Password"]."<br>";

// if ($_SESSION["PhoneNumber"] != "") {
//     echo "Phone Number:" . $_SESSION["Phonenumber"]."<br>";
// }


?>

<head>
    <title>View Profile</title>
    <link rel="stylesheet" href="../css/viewProfile.css">
</head>
<body>
    <!-- Header  -->
    <h5>navbar here...</h5>
    <!-- Home  -->
    <section class="home">
        <div class="form-container">
            <i class="uil uil-times"></i>
            <!-- Form  -->
            <div class="form view_form"></div>
            <form action="#">
                <h2>My profile</h2>

            </form>
        </div>
    </section>
</body>
