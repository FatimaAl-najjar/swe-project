<!DOCTYPE html>
<html>
<head>
    <title>Navigation Bar Example</title>
    <style>
        /* Add any desired styling to your navigation bar */
        /* For example: */
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #f1f1f1;
        }

        ul.navbar li {
            float: left;
        }

        ul.navbar li a {
            display: block;
            color: #333;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.navbar li a:hover {
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
    </style>
    <script>
        window.addEventListener('scroll', function() {
            var logo = document.querySelector(".logo-image");
            if (window.scrollY > 0) { // Change the value as per your requirement for when the scroll should trigger the logo change
                logo.classList.add("logo-scroll");
            } else {
                logo.classList.remove("logo-scroll");
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