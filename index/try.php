<!DOCTYPE html>
<html>
<head>
    <title>Nav bar</title>
    <style>
        /* Add any desired styling to your navigation bar */
        /* For example: */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999; /* Adjust the z-index value as per your needs */
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #f1f1f1;
        }

        .navbar li {
            float: left;
        }

        .navbar li a {
            display: block;
            color: #333;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar li a:hover {
            background-color: #ddd;
        }

        .logo-image {
            height: 70px;
            width: 70px;
            /* Add any specific styling for your logo image */
        }
        .logo-scroll {
            height: 50px;
            width: 50px;
            /* Add any specific styling for your scrolled logo image */
        }
        /* Add styling to push the content down to make space for the fixed navigation bar */
        body {
            margin-top: 70px; /* Adjust the value to match the height of the navigation bar */
        }
    </style>
    <script>
        window.addEventListener('scroll', function() {
            var logo = document.querySelector(".logo-image");
            if (window.scrollY > 0) { // Change the value as per your requirement for when the scroll should trigger the logo change
                logo.classList.add("logo-scroll");
                logo.src = "../images/logo3.png"; // Path to the second logo image
                logo.alt = "Logo2"; // Alternate text for the second logo image
            } else {
                logo.classList.remove("logo-scroll");
                logo.src = "../images/L1.png"; // Path to the original logo image
                logo.alt = "Logo1"; // Alternate text for the original logo image
            }
        });
    </script>
</head>
<body>
    <ul class="navbar">
        <li><a href="#"><img class="logo-image" src="../images/L1.png" alt="Logo1"></a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Sign Up</a></li>
    </ul>
    <img src="../images/L1.png" alt="Logo1">
    <br>
    <img src="../images/L1.png" alt="Logo1">
    <br>
    <img src="../images/L1.png" alt="Logo1">
    <br>
    <img src="../images/L1.png" alt="Logo1">
    <br>
    <img src="../images/L1.png" alt="Logo1">
    <br>
    <img src="../images/L1.png" alt="Logo1">
    <br>
    <!-- Add your content here -->
</body>
</html>