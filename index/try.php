<!-- <!-- <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .navbar {
                position: fixed;
                top: 0px;
                width: 100%;
                list-style-type: none;
                margin-left: -9px;
                margin-top: 0px;
                z-index: 9999;
                padding: 0px;
                overflow: hidden;
                background-color: #ffffff;
            }
            .navbar ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            .navbar li {
                float: left;
            }
    
            .navbar li a {
                float: left;
                display: block;
                color: #484da0;
                text-align: center;
                padding-top: 30px;
                padding-left: 5px;
                padding-right: 5px;
                padding-bottom: 10px;
                margin: 8px;
                font-size: 20px;
                font-weight: bold;
                text-decoration: none;
            }
    
            .navbar li a {
                position: relative; /* Add relative positioning to the anchor element */
            }
    
            .navbar li a::after {
                content: "";
                position: absolute;
                bottom: 0px;
                left: 0;
                width: 0;
                height: 3px;
                background-color: #02309b; /* Set the color of the horizontal line */
                transition: width 0.3s ease-out; /* Add a transition effect for smooth animation */
            }
    
            .navbar li a:hover::after {
                width: 100%; /* Expand the width of the line when hovering */
            }
    
            .logo-image {
                padding-left: 50px;
                padding-right: 300px;
                height: 90px;
                width: 330px;
            }
    
            .logo-scroll {
                padding-left: 180px;
                height: 80px;
                width: 96px;
                padding-right: 405px;
            }
    
            body {
                margin-top: 70px;
                background-color: #000040;
            }
    
            .nav_btn button {
                margin: 3px;
                padding: 7px;
                font-size: 20px;
                position: fixed;
                top: 26px;
                left: 1400px;
                outline: none;
                border: 3px solid #484da0;
                -o-border-radius: 10px;
                cursor: pointer;
                color: #484da0;
                background: #ffffff;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                -ms-border-radius: 10px;
                border-radius: 10px;
            }
            .nav_btn i {
                margin: 3px;
                padding: 4px;
                font-size: 30px;
                position: fixed;
                top: 26px;
                right: 150px;
                outline: none;
                border: 3px solid #484da0;
                -o-border-radius: 10px;
                cursor: pointer;
                color: #484da0;
                background: #ffffff;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                -ms-border-radius: 10px;
                border-radius: 10px;
    }
    
            .navbar .icon {
                display: none;
            }
    
            /* Hide the li elements in the navbar when the page is resized */
            @media screen and (max-width: 1400px) {
                .navbar:not(.responsive) li:not(:first-child) {
                    display: none;
                }
    
                .navbar .nav_btn {
                    display: none;
                }
    
                .navbar .icon {
                    display: block;
                    position: absolute;
                    font-size: 34px;
                    top: 30px;
                    color:#484da0;
                    right: 20px;
                }
    
                .navbar.responsive .icon {
                    top: 26px;
                }
    
                .navbar.responsive li {
                    display: block;
                }
                
            }
        </style>
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
            <li><a href="#">About Me</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Announcements</a></li>
            <div class="nav_btn">
            <a href="#"><i class="fa fa-user"></i></a>
                <a href="#"><button style="right: 110px;">Logout</button></a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
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
    </body>
    </html> -->


    <!-- starting footer -->
<!-- <footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="add-icon">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="add-content">
                    <h5>Address</h5>
                    <p>123 Street, City, Country</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="add-icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="add-content">
                    <h5>Email</h5>
                    <p>example@example.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center p-3">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </div>
</footer> -->

<!-- <html>

<head>
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
</head>

<body>

    <footer>

        <div class="footer-content">
            <h1 class="footer-title">
               <img src="../images/L1.png" alt="logo" />
            </h1>

        </div>

        <div class="words">
        <p class="info">We could not have reached this milestone of achievement without you.</p>
        <p class="info">Support Emails - help@tamarai.com, support@tamarai.com</p>
        <p class="info">Telephone - 0123456789</p>
        </div>

        <div class="footer-social-container">

            <div class="linkers">
                <a href="#" class="social-link">Terms & Services</a>
                <a href="#" class="social-link">Privacy & Policy</a>
            </div>
            <div>

                <div class="social-media">

                    <a href="#"><i class="bx bxl-linkedin-square"></i></a>
                    <a href="#"><i class="bx bxl-facebook-square"></i></a>
                    <a href="#"><i class="bx bxl-instagram-alt"></i></a>
                    <a href="#"><i class="bx bxl-github"></i></a>

                </div>

            </div>
        </div>
        <p class="footer-credit">Tamarai, Best Online store.</p>
    </footer>
</body>

</html> --> -->


<!DOCTYPE html>
<html>
<head>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box}

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<form action="/action_page.php" style="border:1px solid #ccc">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>

</body>
</html>Sure! Here's your code with the requested style applied:

```php
<?php
session_start();
include_once "../includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/signup.css">
    <style>
        .card {
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box}

        /* Full-width input fields */
        input[type=text], input[type=password], input[type=number] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
            background-color: #ddd;
            outline: none;
        }

        label {
            display: inline-block;
            width: 150px;
        }

        h2 {
            color: red;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }
    </style>
    <title>Sign up</title>
</head>
<body>
    <?php    
        $errorMessage = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $FirstName = $_POST["FirstName"];
            $LastName = $_POST["LastName"];
            $Email = $_POST["Email"];
            $Password = $_POST["Password"];
            $repeatPassword = $_POST["repeatPassword"];
            $Phonenumber = $_POST["Phonenumber"];
            
            if (empty($FirstName) || empty($LastName) || empty($Email) || empty($Password) || empty($repeatPassword) || empty($Phonenumber)) {
                $errorMessage = "<h2>Please fill in all the required fields.</h2>";
            } elseif ($Password !== $repeatPassword) {
                $errorMessage = "<h2>Password mismatch.</h2>";
            } else {
                $FirstName = mysqli_real_escape_string($conn, $FirstName);
                $LastName = mysqli_real_escape_string($conn, $LastName);
                $Email = mysqli_real_escape_string($conn, $Email);
                $Password = mysqli_real_escape_string($conn, $Password);
                $Phonenumber = mysqli_real_escape_string($conn, $Phonenumber);

                $sql = "INSERT INTO patients (FirstName, LastName, Email, Password, Phonenumber) 
                    VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";
    
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    // Redirect after a successful registration
                    header("Location: ../index/login.php");
                    exit;
                } else {
                    $errorMessage = "<h2>An error occurred during registration.</h2>";
                }
            }
        }
    ?>
    <?php include "../includes/nav.php"; ?>
    <br><br><br>
    <div class="card">
        <form action="" method="post">
            <label>First Name:</label>
            <input type="text" name="FirstName" placeholder="Enter your first name"><br>
            <label>Last Name:</label>
            <input type="text" name="LastName" placeholder="Enter your last name"><br>
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Enter your email"><br>
            <label>Password:</label>
            <input type="password" name="Password" placeholder="Enter your password"><br>
            <label>Re-enter Password:</label>
            <input type="password" name="repeatPassword" placeholder="Re-enter your password" required><br>
            <label>Phone number:</label>
            <input type="number" name="Phonenumber" placeholder="Enter your phone number"><br>
            <button type="submit" value="submit">Sign Up</button>
        </form>
    </div>
    <?php echo $errorMessage; ?>
</body>
</html>
```

In this updated code, I added the additional required style to the existing code. The new style includes the card layout for the form container and the updated styles for the labels, inputs, and error message. Feel free to modify the styles further to match
