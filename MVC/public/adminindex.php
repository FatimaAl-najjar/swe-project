<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Admins.php");

$model = new Admins();
// echo $_SESSION["ID"];    // Working

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://unpkg.com/swup@3"></script>
    <script defer src="assets/js/admin.js"></script>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/adminindex.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                
                <div class="close" id="close-btn">
                    <i class='bx bxs-log-out-circle'></i>
                </div>
            </div>

            <div class="sidebar">
                <a class="active" href="adminindex.php">
                    <i class='bx bxs-grid-alt' ></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="addAdmin.php">
                    <i class='bx bx-add-to-queue' ></i>
                    <h3>Add Admin</h3>
                </a>
                <a href="addPatient.php">
                    <i class='bx bxs-add-to-queue'></i>
                    <h3>Add Patient</h3>
                </a>
                <a href="editpatient.php">
                    <i class='bx bxs-edit'></i>
                    <h3>Edit Patient</h3>
                </a>
                <a href="delete_patient.php">
                    <i class='bx bxs-minus-square'></i>
                    <h3>Delete Patient</h3>
                    <!-- <span class="message-count">26</span> -->
                </a>
               
                <a href='login.php?action=Logout'>
                    <i class='bx bxs-log-out'></i>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!--=================== END OF ASIDE ===================-->
        <main id="swup" class="transition-fade">
            <h1>My  Dashboard</h1>
            <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <i class='bx bx-menu'></i>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?php echo $model->getNamebyID($_SESSION["ID"]); ?></b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    
                </div>
            </div>
            <div class="insights">
                <div class="sales">
                    <i class='bx bxs-user-account'></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Patients</h3>
                            <h1><?php echo $model->countPatients(); ?></h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx = '38' cy = '38' r = '36'></circle>
                            </svg>
                            <div class="number">
                                <p>50%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">
                        Active Now
                    </small>
                </div>
                 <!-- ---------------------- END OF SALES --------------------- -->
                 <div class="expenses">
                    <i class='bx bxs-user-rectangle'></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Admins</h3>
                            <h1><?php echo $model->countAdmins(); ?></h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx = '40' cy = '40' r = '34'></circle>
                            </svg>
                            <div class="number">
                                <p>80%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">
                        Active Now
                    </small>
                </div>
                 <!-- ---------------------- END OF EXPENSES --------------------- -->
   
           
        <!-- ----------------------- END OF MAIN -------------------- -->

 
          
            

    </body>
    </html>