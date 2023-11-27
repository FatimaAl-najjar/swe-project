<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "../includes/dbh.inc.php";
include '../includes/nav2.php';

$currentDateTime = new DateTime();
$halfHourLater = $currentDateTime->add(new DateInterval('PT30M'));
$halfHourLaterFormatted = $halfHourLater->format('Y-m-d\TH:i');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/book_appointment.css">
    <title>Document</title>
</head>
<body>
   <div class="row"> 
       <div class="home-img">
           <img class="my-img" src="../images/waiting_room2.jpg">
       </div>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           <input type="datetime-local" name="datetime" class="box" min="<?php echo $halfHourLaterFormatted; ?>">
           <input type="submit" name="book_now" class="btn1">
       </form>
   </div>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['ID'])) {
        $user_id = $_SESSION['ID'];
        $DateTime = $_POST["datetime"];
        $selectedDateTime = new DateTime($DateTime);
        $Datee = $selectedDateTime->format('Y-m-d');
        $Time = $selectedDateTime->format('H:i:s');

        $selectedDay = $selectedDateTime->format('N');
        if (empty(trim($DateTime))) {
            echo "<div class='error-box'>Error: pick an appointment first please</div>";
        }
        elseif ($selectedDay == 5) {
            echo "<div class='error-box'>Appointments are only available from Saturday to Thursday.</div>";
        }
        else {
            $selectedTime = $selectedDateTime->format('H:i');
            $startTime = new DateTime('17:00');
            $endTime = new DateTime('22:00');
            if ($selectedTime < $startTime->format('H:i') || $selectedTime > $endTime->format('H:i')) {
                echo "<div class='error-box'>Appointments are only available from 5pm to 10pm.</div>";
            }
            else {
                $halfHourEarlier = clone $selectedDateTime;
                $halfHourEarlier->sub(new DateInterval('PT30M'));
                $startTime = $halfHourEarlier->format('H:i:s');
                $endTime = $Time;

                $deleteSql = "DELETE FROM appointments WHERE day = '$Datee' AND patients_id = '$user_id'";
                $deleteResult = mysqli_query($conn, $deleteSql);

                if (!$deleteResult) {
                    echo "<div class='error-box'>Error deleting previous appointments.</div>";
                }
                else {
                    $checkSql = "SELECT * FROM appointments WHERE day = '$Datee' AND duration >= '$startTime' AND duration <= '$endTime'";
                    $checkResult = mysqli_query($conn, $checkSql);

                    if (mysqli_num_rows($checkResult) > 0) {
                        echo "<div class='error-box'>There is already an appointment booked within the selected time range. Please choose a different time.</div>";
                    }  
                    else {
                        $sql = "INSERT INTO appointments (day, duration, patients_id) 
                                VALUES ('$Datee', '$Time', '$user_id')";
                        
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo "Error: " . mysqli_error($conn);
                        }
                        if (mysqli_affected_rows($conn) > 0) {
                            header("Location:../index/book_appointment.php");
                            exit;
                        } else {
                            echo "<div class='error-box'>Error booking the appointment.</div>";
                        }
                    }
                }
            }
        }
    }
    else {
        echo "<div class='error-box'>You must be logged in to book an appointment.</div>";
    }
}
?>

</body>
</html>

<?php include '../includes/footer.php';?>