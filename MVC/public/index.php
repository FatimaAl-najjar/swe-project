<link rel="stylesheet" href="css/home.css">
<?php include('static.php'); ?>
<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Patient.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "view/ViewPatient.php");

$model = new Patient(123);
$controller = new PatientController($model);
$view = new ViewPatient($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}

if(isset($_POST['login']))	{
	$name=$_REQUEST["FirstName"];
	$password=$_REQUEST["Password"];
	$sql = "SELECT * FROM patients where FirstName ='$FirstName' and Password='Password'";
	$dbh = new Dbh();
	$result = $dbh->query($sql);
	if ($result->num_rows == 1){
		$row = $dbh->fetchRow();
		$_SESSION["ID"]=$row["ID"];
		$_SESSION["FirstName"]=$row["FirstName"];
		header("Location:PatientProfile.php");
	}
}
?>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <style>
    .open-button {
  background-color: #3e37b0;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
    }
  .open-button:hover {
  opacity: 1;
}

   </style> 
</head>
 <div class="container">
        <img class="img" src="Images/background1.jpeg" alt="medicalbackground">
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
      <div class="container2" style="display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    max-width: 100%;">
                <div class="card">
            <div class="circle">
                <img src="Images/cycle5.jpeg" class="circlepic">
                </div>
                <div class="content">
                    <h3>Diabetes mellitus</h3>
                    <p>Type 1&2 Diabetic Emergencies
                    </p>
                    </div>
                </div>
                <div class="card">
                    <div class="circle">
                        <img src="Images/cycle2.jpeg" class="circlepic">
                        </div>
                        <div class="content">
                            <h3>pituitary and adrenal glands disorders</h3>
                            <p>Prolactinoma,Cushing,
                                addison,pheochromocytoma and infertility</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="circle">
                                <img src="Images/circle6.webp" class="circlepic">
                                </div>
                                <div class="content">
                                    <h3>growth disorders </h3>
                                    <p>Gigantism and short-stature</p>
                                    </div>
                        </div>
                        <div class="card">
                            <div class="circle">
                                <img src="Images/cycle4.jpeg" class="circlepic">
                                </div>
                                <div class="content">
                                    <h3>thyroid disorders </h3>
                                    <p>Hypothyroidism,
                                        Hyperthyroidism,and
                                        Thyroditis</p>
                                    </div>
                        </div>


            </div>
            <div class="container3">
                <img class="landscape" src="Images/landscape.jpeg" alt="landscape">
            </div>
            <div class="container4">
                    <div class="leftpart">
                        <img class="profilepicture" src="Images/profile.jpeg" alt="doctor pic">
                    </div>
                    <div class="profileinfo" style="margin-top: 15%;">
                    
                    </>
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

                <div class="nav-arrow prev" onclick="showReview(-1)">❮</div>
                <div class="nav-arrow next" onclick="showReview(1)">❯</div>
            </div>
            
              <?php include('footer.php'); ?>
              <a href="mapsAi.php">
    <button class="open-button">
        <i class="material-icons" style="font-size: 36px;">place</i>
    </button>
</a>
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
        

      