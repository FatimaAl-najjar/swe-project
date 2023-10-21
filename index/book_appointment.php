<?php
include_once "../includes/dbh.inc.php";
// include_once "/includes/login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... your HTML head content ... -->
</head>
<body>
   <!-- ... your HTML content ... -->
   <form action="" method="post">
       <!-- ... your form inputs ... -->
       <input type="time" name="time" class="box">
       <input type="date" name="date" class="box">
       <input type="submit" name="book_now" class="btn">
   </form>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure that the user is logged in
    if (isset($_SESSION['ID'])) {
        $user_id = $_SESSION['ID'];

        $Time = $_POST["time"]; // Modify to match your database column name
        $Date = $_POST["date"];

        // Insert the appointment into the database along with the user's ID
        $sql = "INSERT INTO timeslots (date, duration, patients_id) 
                VALUES ('$Date', '$Time', '$user_id')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location:../index/signup.php");
            exit;
        }
    } else {
        // Handle the case when the user is not logged in
        echo "You must be logged in to book an appointment.";
    }
}
?>
</body>
</html>
