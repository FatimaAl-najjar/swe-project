<?php
session_start();

echo "User Name:" . $_SESSION["FirstName"]. " ". $_SESSION["LastName"]. "<br>";
echo "Email:" . $_SESSION["Email"]."<br>";
echo "Password:" . $_SESSION["Password"]."<br>";
// if ($_SESSION["PhoneNumber"] != "") {
//     echo "Phone Number:" . $_SESSION["Phonenumber"]."<br>";
// }


?>