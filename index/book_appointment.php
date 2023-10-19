<?php
require_once "book_db.php";
include_once "../includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/book_appointment.css"  rel ="stylesheet"></link>
 
    <title>Book Appointment</title>
</head>
<body>
   <h1 class="heading"> <span>book</span> now </h1>
   <div class="row">
    <div class="image">
        <img src="../images/waiting_room.jpg" alt = "">
        </div>
<form action=""  method="post">
    <h3 > book appointment </h3>
    <!-- <input type ="text" placeholder="your name" class="box">
    <input type ="number" placeholder="your number" class="box">
    <input type ="email" placeholder="your email" class="box"> -->
    <input type ="time" name ="time" class="box">
    <input type ="date" name="date"  class="box">
    <input type ="submit" placeholder="book now" class="btn">

</form> 
</div>
<?php
    
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Duration =  $_POST["time"];
        $Date = $_POST["date"];
        
        $sql = "INSERT INTO timeslots(date, duration) 
                VALUES ('$Date', '$Duration')";
    
        $result = mysqli_query($conn, $sql);

        
    
        if ($result) {
            
            header("Location:./book_appointment.php");
            exit;
            
        }
    }
    
  
    ?>
</body>
</html>