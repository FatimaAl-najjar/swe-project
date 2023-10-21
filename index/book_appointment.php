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
   <form action="" method="post">
       <!-- ... your form inputs ... -->
       <!-- <input type="time" name="time" class="box"> -->
       <input type="datetime-local" name="datetime" class="box" min="<?php echo $halfHourLaterFormatted; ?>">
       <!-- <input type="date" name="date" class="box"> -->
       <input type="submit" name="book_now" class="btn">
        
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

        // Calculate the start and end time of the half-hour range
        $halfHourEarlier = clone $selectedDateTime;
        $halfHourEarlier->sub(new DateInterval('PT30M'));
        $startTime = $halfHourEarlier->format('H:i:s');
        $endTime = $Time;

        // Check if there are any existing appointments within the half-hour range
        $checkSql = "SELECT * FROM timeslots WHERE date = '$Date' AND duration >= '$startTime' AND duration <= '$endTime'";
        $checkResult = mysqli_query($conn, $checkSql);

        if (mysqli_num_rows($checkResult) > 0) {
            // There is already an appointment within the half-hour range
            echo "There is already an appointment booked within the selected time range. Please choose a different time.";
        }  else {
            // Insert the appointment into the database along with the user's ID
            $sql = "INSERT INTO timeslots (date, duration, patients_id) 
                    VALUES ('$Date', '$Time', '$user_id')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location:../index/book_appointment.php");
                exit;
            } else {
                echo "Error booking the appointment.";
            }
        }
    } else {
        // Handle the case when the user is not logged in
        echo"You must be logged in to book an appointment.";
    }
}
?>
 
 </body>
</html>

    <?php include '../includes/footer.php';?>
