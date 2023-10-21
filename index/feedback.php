<?php 
session_start();
include '../includes/nav.php';
include_once "../includes/dbh.inc.php";
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
        <?php
        echo '<div class="alert alert-warning" role="alert">
            A simple warning alert—check it out!
        </div>'
        ?>
        <div class="container mt-5">
            <h2>Please, enter your e-mail and feedback.</h2>
            <form action="../index.php" method="post">
                <div class="mb-3">
                    <label for="ControlInput1" class="form-label">Email address</label>
                    <input type="email" name="Email" class="form-control" id="ControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="Txtarea1" class="form-label">Enter your feedback</label>
                    <textarea class="form-control" name="feedback" id="Txtarea1" rows="3"></textarea>
                </div>
                <button type="button" class="btn btn-primary">Submit</button>
            </form>
            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>