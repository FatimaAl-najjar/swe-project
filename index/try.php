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
            background-color: #ffffff
        }

        .navbar li {
            float: left;
        }

        .navbar li a {
            display: block;
            color: #484da0;
            text-align: center;
            padding-top: 30px;
            padding-left: 5px;
            padding-right: 5px;
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
  padding-right:290px;
  height: 90px;
  width: 330px;
 }
.logo-scroll {
    height: 80px;
    width: 96px;
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
    top : 26px;
    right: 20px;
    outline:none;
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
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Announcements</a></li>
            <!-- <li><a href="#">Sign Up</a></li>
            <li><a href="#">Sign Up</a></li> -->
            <div class="nav_btn">
                <a href="#"><button style="right: 110px;">Log in</button></a>
                <a href="#"><button>sign up</button></a>
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