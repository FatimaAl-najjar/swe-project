<?php
echo'

<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Footer</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        .footer-main{
    padding-top: 90px;
    background: #4455a4;
    }

    .address-main > div.col-lg-4 {
    border-bottom: dotted 1px #999;
    }
    .address-box {
    padding: 10px 0;
    margin-bottom: 30px;
    }
    .add-icon{
    float: left;
    width: 60px;
    display: inline-block;
    padding: 0px 5px;
    }
    .address-box .add-icon {
    background: #27303b;
    height: 75px;
    line-height: 75px;
    width: 75px;
    margin-right: 20px;
    text-align: center;
    }
    .add-icon img{
    width: 100%;
    }
    .address-box .add-icon img {
    max-width: 40px;
    }
    .add-content{
    padding-left: 70px;
    }
    .add-content h5 {
    font-size: 20px;
    color: #ffffff;
    padding: 0;
    font-weight: 500;
    margin-bottom: 10px;
    }
    .add-content p {
    font-size: 16px;
    color:  #4455a4;
    font-weight: 300;
    }
    .add-content p a{
    font-size: 16px;
    color: #4455a4;
    font-weight: 300;
    word-wrap: break-word;
    }
    .add-content p a:hover{
    color: #ffb32d;
    }
    </style>
    </head>

    <body>
    <footer class="footer-main bg-dark fixed-bottom" style="background:#4455a4;">
    <div class="container">
    <div class="row address-main">
        <div class="col-lg-4 col-sm-12 col-xs-12">
        <div class="address-box clearfix">
            <div class="add-icon">
            <img src="../images/address.png" alt="" />
            </div>
            <div class="add-content">
            <h5>Address</h5>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut veniam </p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12">
        <div class="address-box clearfix">
            <div class="add-icon">
            <img src="../images/phone.png" alt="" />
            </div>
            <div class="add-content">
            <h5>Phone</h5>
            <p>  +(20)010123456789 <br />
            +(20)010123456789  </p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12">
        <div class="address-box clearfix">
            <div class="add-icon">
            <img src="../images/email.png" alt="" />
            </div>
            <div class="add-content">
            <h5>Email</h5>
            <p> <a href="mailto:" style="text-decoration:none">MerhanSamy@gmail.com</a> </p>
            </div>
        </div>
        </div>
    </div>
    </div>


    <!-- Copyright Footer -->
    <footer class="bg-dark text-center text-white">

    <!-- Grid container -->
    <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
    <!-- Facebook -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-facebook-f"></i
    ></a>

    <!-- Twitter -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-twitter"></i
    ></a>

    <!-- Google -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-google"></i
    ></a>

    <!-- Instagram -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-instagram"></i
    ></a>

    </section>
    <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    DR.MERHAN SAMY Clinic  © 2024 All Rights Reserved.
    </div>
    <!-- Copyright -->
    </footer>
    </footer>
    </body>
    </html>;'
    ?>