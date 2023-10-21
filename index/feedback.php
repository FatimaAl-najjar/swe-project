<?php 
session_start();
// include '../includes/nav.php';
// include_once "../includes/dbh.inc.php";
?> 

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <!-- PHP  -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $feedback = $_POST['feedback'];
        }
        $conn = mysqli_connect('localhost', 'root', '', 'clinic');
        if(!$conn) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role"alert"><strong>Connection failed!</strong></div>' .mysqli_connect_error();
        }
        else {
            $sql = "INSERT INTO feedback(Email, Feedback) VALUES ('$email', '$feedback')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role"alert"><strong>Success!</strong> feedback is submitted from ' .$email. ' Thank You!!</div>';
            }
            else {
                echo '<div class="alert alert-warning alert-dismissible fade show" role"alert"><strong>Error Uploading data!</strong></div>'.mysqli_error($conn);
            }
        }

        ?>
        <!-- PHP  -->
        <div class="container mt-5">
            <h2>Please, enter your e-mail and feedback.</h2>
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="feedback" class="form-label">Enter your feedback</label>
                    <textarea class="form-control" name="feedback" id="feedback" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>