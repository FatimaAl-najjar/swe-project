<!DOCTYPE html>
<html>
<head>
    <title>Nav bar</title>
    <style>
        
        .navbar {
            position: fixed;
            top: 0px;
            width: 100%;
            list-style-type: none;
            margin-left: -9px;
            margin-top: 0px;
            padding: 0px;
            overflow: hidden;
            background-color: #c5b974;
        }

        .navbar li {
            float: left;
        }

        .navbar li a {
            display: block;
            color: #484da2;
            text-align: center;
            padding-top: 35px;
            padding-left: -10px;
            padding-right: 3px;
            padding-bottom: 10px;
            margin:8px;
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
  padding-left:10px;
  height: 90px;
  width: 300px;
 }
.logo-scroll {
    height: 80px;
    width: 96px;
}
    
body {
     margin-top: 70px; 
     background-color: #000040;
     
 }

 /* div{
    padding-left:410px;
 } */
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
            <li><a href="#">Announcements</a></li>
            <!-- <li><a href="#">Sign Up</a></li>
            <li><a href="#">Sign Up</a></li> -->
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