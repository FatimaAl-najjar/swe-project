
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
               
                <a href='adminLogin.php?action=Logout'>
                    <i class='bx bxs-log-out'></i>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!--=================== END OF ASIDE ===================-->
        <main id="swup" class="transition-fade">
            <h1>My  Dashboard</h1>
            
            <div class="insights">
                <div class="sales">
                    <i class='bx bxs-user-account'></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Patients</h3>
                            <h1>450</h1>
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
                            <h1>10</h1>
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

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <i class='bx bx-menu'></i>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Admin</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    
                </div>
            </div>
            <!-- --- END OF TOP --- -->
            <div class="recent-updates">
                <h2>Doctor Announcments</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Vacation</b> i will not come tomorrow</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Clinic cancelled</b> My tuseday clinic will be cancelled</p>
                            <small class="text-muted">22 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Early arriving</b> I Will be early on thursday</p>
                            <small class="text-muted">222 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>            
            </div>
        </div>
        </div>

    </body>
    </html>