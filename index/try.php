<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Nav bar</title>
    <style>
        .navbar {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: 999; /* Adjust the z-index value as per your needs */
            list-style-type: none;
            margin: 0px;
            padding: 0px;
            background-color: #ddd;
        }

        .navbar li {
            display: block;
        }

        .navbar li a {
            display: block;
            color: #484da2;
            text-align: center;
            padding: 10px;
            font-size: 20px;
            text-decoration: none;
        }

        .navbar .logo-image {
            height: 90px;
            width: 300px;
            padding-left: 10px;
            display: inline-block;
        }

        .navbar .logo-image-scroll {
            height: 70px;
            width: 85px;
        }

        .navbar .menu-icon {
            display: none;
            font-size: 26px;
            float: right;
        }

        .menu {
            display: none;
            margin-top: 50px;
        }

        .menu li {
            text-align: center;
            margin-bottom: 10px;
        }

        .menu li a {
            display: inline-block;
            width: 100%;
            padding: 8px 0;
        }

        @media only screen and (max-width: 768px) {
            .navbar li {
                display: none;
            }

            .navbar .menu-icon {
                display: block;
            }

            .menu {
                display: block;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
    
    <ul class="navbar">
        <li><img class="logo-image" src="../images/logo3.png" alt="Logo1"></li>
        <li class="menu-icon"><span class="glyphicon">&#xe236;</span></li>
        <ul class="menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Sign Up</a></li>
        </ul>
    </ul>
    <!-- test -->
    
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
    
    <script>
        var menuIcon = document.querySelector('.menu-icon');
        var menu = document.querySelector('.menu');

        menuIcon.addEventListener('click', function() {
            menu.classList.toggle('active');
        });
    </script>
</body>
</html>