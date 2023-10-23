<?php 
session_start();
include '../includes/nav2.php';
// include_once "../includes/dbh.inc.php";  // I made it from scratch line 22
?> 

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback</title>

    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];

        $conn = mysqli_connect('localhost', 'root', '', 'clinic');
        if (!$conn) {
            echo '<script>alert("Connection failed! ' . mysqli_connect_error() . '");</script>';
        } else {
            $sql = "INSERT INTO feedback(Email, Feedback) VALUES ('$email', '$feedback')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
echo '<script>alert("Success! Feedback is submitted from ' . $email . '. Thank you!");</script>';      
      }
            else {
                echo '<script>alert("Error Uploading data!");</script>';
            }
        }
    }
?>

    <div class="container">
        <h2>Please enter your email and feedback.</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="feedback">Enter your feedback</label>
                <textarea name="feedback" id="feedback" rows="3"></textarea>
            </div>
            <button type="submit" class="btn-primary">Submit</button>
            <a href="homePage.php"><button type="button" class="btn-secondary">Back</button></a>
        </form>
    </div>

    <!-- Rest of your code -->
</body>
</html>

<footer><?php include '../includes/footer.php';?></footer>