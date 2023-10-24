<?php 
session_start();
include '../includes/nav.php';
include_once "../includes/dbh.inc.php";
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link rel="stylesheet" type="text/css" href="../css/home.css" />
</head>
<body>
    <div class="container">
        <img class="img" src="../images/background1.jpeg" alt="medicalbackground">
        <div class="text-block">
          <h4>Dr.Merhan Samy Nasr</h4>
          <br>

          <h1>Live a healthy life style</h1>
          <p>Prof. of diabetes,internal medecine and endocrinology<br>
            AIN SHAMS UNIVERSITY
          </p>
          <button class="explorebutton">Explore More</button>
        </div>
      </div>    
      <div class="container2">
                <div class="card">
            <div class="circle">
                <img src="../images/cycle5.jpeg" class="circlepic">
                </div>
                <div class="content">
                    <h3>Diabetes mellitus</h3>
                    <p>Type 1&2 Diabetic Emergencies
                    </p>
                    </div>
                </div>
                <div class="card">
                    <div class="circle">
                        <img src="../images/cycle2.jpeg" class="circlepic">
                        </div>
                        <div class="content">
                            <h3>pituitary and adrenal glands disorders</h3>
                            <p>Prolactinoma,Cushing,
                                addison,pheochromocytoma and infertility</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="circle">
                                <img src="../images/circle6.webp" class="circlepic">
                                </div>
                                <div class="content">
                                    <h3>growth disorders </h3>
                                    <p>Gigantism and short-stature</p>
                                    </div>
                        </div>
                        <div class="card">
                            <div class="circle">
                                <img src="../images/cycle4.jpeg" class="circlepic">
                                </div>
                                <div class="content">
                                    <h3>thyroid disorders </h3>
                                    <p>Hypothyroidism,
                                        Hyperthyroidism,and
                                        Thyroditis</p>
                                    </div>
                        </div>


            </div>
            <!-- <div class="container2">
                <div class="circle">
                    <div class="icon">&#9873;</div> 
                    <div class="title">Diabetes Mellitus</div>
                    <div class="description">A group of metabolic disorders characterized by high blood sugar levels.</div>
                </div>
        
                <div class="circle">
                    <div class="icon">&#9732;</div> 
                    <div class="title">Pituitary & Adrenal Glands Disorders</div>
                    <div class="description">Conditions affecting the pituitary and adrenal glands, leading to hormonal imbalances.</div>
                </div>
        
                <div class="circle">
                    <div class="icon">&#9733;</div> 
                    <div class "title">Growth Disorders</div>
                    <div class="description">Conditions that affect a person's physical growth or development.</div>
                </div>
        
                <div class="circle">
                    <div class="icon">&#9734;</div> 
                    <div class="title">Thyroid Disorders</div>
                    <div class="description">Problems with the thyroid gland that can lead to various health issues.</div>
                </div>
            </div> -->
        
        
            <div class="container3">
                <img class="landscape" src="../images/landscape.jpeg" alt="landscape">
            </div>
            <div class="container4">
                    <div class="leftpart">
                        <img class="profilepicture" src="../images/profile.jpeg" alt="doctor pic">
                    </div>
                    <div class="profileinfo">
                        <h2>Dr.Merhan Samy Nasr </h2>
                        <p>Prof merhan samy worked since 2002 at el demerdash hospitals ASU  starting as a resident till became a professor in 2020 
                            During these years she also worked as a consultant at ain shams specialized hospital clinics, diabetic foot center at the greek hospital and at el haya hospital clinics before founding her own private clinic in 2015.</p>
                   <div class="buttons-info">
                        <button class="btn1-info">Get to Know More</button>
                        <button class="btn2-info">Contact Us!</button>

                   </div>

                    </div>           
                    
 
            </div>
            <div class="container5">
                <h1>Client Reviews</h1>
                <div class="review" id="review1">
                    <div class="avatar"></div>
                    <div class="text">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus, felis ac fringilla."</p>
                        <p><strong>John Doe</strong></p>
                    </div>
                </div>
        
                <div class="review" id="review2">
                    <div class="avatar"></div>
                    <div class="text">
                        <p>"Sed euismod augue et tortor fringilla, ac sollicitudin felis tempor. Nunc at feugiat sapien."</p>
                        <p><strong>Jane Smith</strong></p>
                    </div>
                </div>
        
                <!-- Add more reviews as needed -->
        
                <div class="nav-arrow prev" onclick="showReview(-1)">❮</div>
                <div class="nav-arrow next" onclick="showReview(1)">❯</div>
            </div>
        
                <!-- Add more reviews as needed -->
            </div>
<!--         
            <div class="footer">
                <p>&copy; 2023 Dr. Merhan Samy clinic. All rights reserved.</p>
                <p>6 mahmoud hafez st safeer square, Cairo, Egypt, 4470351</p>
                <p>Phone: (+20) 01207238450 | Email: Merhan_nasr@hotmail.com</p>
                <p><a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-of-service.html">Terms of Service</a></p>
            </div> -->
      <script>
        document.getElementsByClassName("explorebutton").onclick = function() {
             window.location.href='aboutdoctor.html';
             }
             let currentReview = 1;
        const reviews = document.querySelectorAll('.review');

        function showReview(direction) {
            reviews[currentReview - 1].style.display = 'none';
            currentReview += direction;

            if (currentReview < 1) {
                currentReview = reviews.length;
            } else if (currentReview > reviews.length) {
                currentReview = 1;
            }

            reviews[currentReview - 1].style.display = 'flex';
        }

        // Initially, show the first review
        showReview(0);

        </script> 

</body>
<footer  style="background:#484da0;">
<?php include '../includes/footer.php';?></footer>
</html>