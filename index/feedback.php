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
        <h1 style="text-align: center;">Feedback</h1>
        <div class="container">
            <div class="mb-3">
                <label for="ControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="ControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="Txtarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="Txtarea1" rows="3"></textarea>
            </div>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>