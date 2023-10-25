<?php
    echo'
    <!DOCTYPE html>
    <html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <script>
            window.addEventListener("scroll", function() {
                var logo = document.querySelector(".logo-image");
                if (window.scrollY > 0) { 
                    logo.classList.add("logo-scroll");
                    logo.src = "../images/L1.png"; 
                    logo.alt = "Logo2"; 
                } else {
                    logo.classList.remove("logo-scroll");
                    logo.src = "../images/logo3.png"; 
                    logo.alt = "Logo1"; 
                }
            });
        </script>
    </head>
    <body>
        <ul class="navbar" id="myTopnav">
            <li><img class="logo-image" src="../images/logo3.png" alt="Logo1"></li>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="announcements_user.php">Announcements</a></li>
            <li><a href="book_appointment.php">Book an appointment</a></li>
            <div class="nav_btn">
            <a href="../index/view_Profile.php"><i class="fa fa-user"></i></a>
                <a href="../index/signout.php"><button >Logout</button></a>
            </div>
            <a href="javascript:void(0);" class="icon1" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </ul>
        
        <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }

    </script>
    <br>
    <br>
    </body>
    </html>';
?>

