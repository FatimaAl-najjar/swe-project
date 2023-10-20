<!DOCTYPE html>
<html>
<head>
    <title>Nav bar</title>
    <style>
        .navbar {
            position: fixed;
            top: 0px;
            width: 100%;
            z-index: 999; /* Adjust the z-index value as per your needs */
            list-style-type: none;
            margin: 0px;
            padding: 0px;
            overflow: hidden;
            background-color: #fff;
        }

        .navbar li {
            float: left;
        }

        .navbar li a {
            display: block;
            color: #484da2;
            text-align: center;
            padding-top: 35px;
            padding-left: 20px;
            padding-right: 3px;
            margin:8px;
            font-size: 20px;
            text-decoration: none;
        }

        .navbar li a {
    position: relative; /* Add relative positioning to the anchor element */
}

.navbar li a::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #02309b; /* Set the color of the horizontal line */
    transition: width 0.3s ease-out; /* Add a transition effect for smooth animation */
}

.navbar li a:hover::after {
    width: 100%; /* Expand the width of the line when hovering */
}
        .logo-image {
            padding-left:10px;
            height: 90px;
            width: 300px;
        }
        .logo-scroll {
            height: 70px;
            width: 85px;
        }
        @media only screen and (max-width: 68px) {
  /* Styles for screens smaller than 768px */
  .navbar li {
    float: none;
  }

  .navbar li a {
    padding: 10px 10px;
    font-size: 16px;
  }

  .logo-image {
    height: 60px;
    width: 200px;
  }
}
body {
      padding:50px;
     margin-top: 70px; 
 }

 div{
    padding-left:410px;
 }
    </style>
<script>
        window.addEventListener('scroll', function() {
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
    
    <ul class="navbar">
        <li><img class="logo-image" src="../images/logo3.png" alt="Logo1"></li>
        <div>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Sign Up</a></li>
         </div>
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
    
</body>
</html>