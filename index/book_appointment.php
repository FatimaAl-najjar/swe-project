<?php
include_once "../includes/dbh.inc.php";
 include '../includes/nav2.php';
 
// include_once "/includes/login.php";
?>
<?php
 

// Get the current date and time
$currentDateTime = new DateTime();

// Add 30 minutes to the current date and time
$halfHourLater = $currentDateTime->add(new DateInterval('PT30M'));

// Format the date and time to match the HTML input format
$halfHourLaterFormatted = $halfHourLater->format('Y-m-d\TH:i');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... your HTML head content ... -->
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/book_appointment.css">
        <title>Document</title>
   
        
   
</head>
<body>
   <!-- ... your HTML content ... -->
   <div class="row"> 
   <div class="home-img">
    <img class="my-img" src="../images/waiting_room2.jpg">
   </div>
   <!-- <div class="message-box">
     Appointments are available from Saturday to Thursday from 5 pm to 10 pm only.
   </div> -->
   <form action="" method="post">
       <!-- ... your form inputs ... -->
       <!-- <input type="time" name="time" class="box"> -->
       <input type="datetime-local" name="datetime" class="box" min="<?php echo $halfHourLaterFormatted; ?>">
       <!-- <input type="date" name="date" class="box"> -->
       <input type="submit" name="book_now" class="btn1">
        
       </form>
   </div>

 
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure that the user is logged in
    if (isset($_SESSION['ID'])) {
        $user_id = $_SESSION['ID'];
        $DateTime = $_POST["datetime"];
        $selectedDateTime = new DateTime($DateTime);
        $Date = $selectedDateTime->format('Y-m-d');
        $Time = $selectedDateTime->format('H:i:s');
        // Check if the selected day is within Saturday to Thursday 
        $selectedDay = $selectedDateTime->format('N'); // 1 (Monday) to 7 (Sunday)
        if (empty(trim($DateTime))) {
            echo " <div class='error-box'>Error: pick an appointment first please";
        }
        if ($selectedDay ==5) { // Not Saturday to Thursday
            echo "<div class='error-box'>Appointments are only available from Saturday to Thursday.</div>";
            exit;
        }

        // Check if the selected time is within 5pm to 10pm
        $selectedTime = $selectedDateTime->format('H:i');
        $startTime = new DateTime('17:00');
        $endTime = new DateTime('22:00');
        if ($selectedTime < $startTime->format('H:i') || $selectedTime > $endTime->format('H:i')) {
            echo "<div class='error-box'>Appointments are only available from 5pm to 10pm.</div>";
            exit;
        }
        // Calculate the start and end time of the half-hour range
        $halfHourEarlier = clone $selectedDateTime;
        $halfHourEarlier->sub(new DateInterval('PT30M'));
        $startTime = $halfHourEarlier->format('H:i:s');
        $endTime = $Time;
        // Delete any previous appointments for the same patient on the same day
        $deleteSql = "DELETE FROM timeslots WHERE date = '$Date' AND patients_id = '$user_id'";
        $deleteResult = mysqli_query($conn, $deleteSql);

        if (!$deleteResult) {
            echo "<div class='error-box'>Error deleting previous appointments.</div>";
            exit;
        }
        // Check if there are any existing appointments within the half-hour range
        $checkSql = "SELECT * FROM timeslots WHERE date = '$Date' AND duration >= '$startTime' AND duration <= '$endTime'";
        $checkResult = mysqli_query($conn, $checkSql);

        if (mysqli_num_rows($checkResult) > 0) {
            // There is already an appointment within the half-hour range
            echo "<div class='error-box'>There is already an appointment booked within the selected time range. Please choose a different time.</div>";
        }  
        else {
            // Insert the appointment into the database along with the user's ID
            $sql = "INSERT INTO timeslots (date, duration, patients_id) 
                    VALUES ('$Date', '$Time', '$user_id')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location:../index/book_appointment.php");
                exit;
            } else {
                echo "<div class='error-box'>Error booking the appointment.</div>";
            }
        }
    } else {
        // Handle the case when the user is not logged in
        echo"<div class='error-box'>You must be logged in to book an appointment.</div>";
    }
}
?>
 
 </body>
</html>

    <?php include '../includes/footer.php';?>
