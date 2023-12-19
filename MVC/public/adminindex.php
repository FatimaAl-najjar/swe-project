<?php
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
    <link rel="stylesheet" href="admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <style>
        :root {
    --color-primary:#7380ec;
    --color-danger:#ff7782;
    --color-success:#41f1b6;
    --color-warning: #ffbb55;
    --color-white:#fff;
    --color-info-dark: #7d8da1;
    --color-info-light: #dce1eb;
    --color-dark:#363949;
    --color-light: rgba(132, 139, 200, 0.18);
    --color-primary-variant: #111e88;
    --color-dark-variant: #677483;
    --color-background: #f6f6f9;
    --card-border-radius: 2rem;
    --border-radius-1: 0.4rem;
    --border-radius-2: 0.8rem;
    --border-radius-3: 1.2rem;
    --card-padding: 1.8rem;
    --padding-1: 1.2rem;
    --box-shadow: 0 2rem 3rem var(--color-light);
}
::-webkit-scrollbar{
    display: none  ;
}
*{
    margin: 0;
    padding: 0;
    outline: 0;
    appearance: none;
    border: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
html{
    font-size: 14px;
}
body{
    width: 100vw;
    height: 100vh;
    font-family: 'BW Gradual Bold';
    font-size: 0.88rek;
    background: var(--color-background);
    user-select: none;
    overflow-x: hidden;
    color: var(--color-dark);
    padding: .3rem;
}

.transition-fade{
    opacity: 1;
    transition: 500ms;
    transform: translateX(0);
}

html.is-animating .transition-fade{
    opacity: 1;
    transform: translateX(100%);
    transform-origin: left;
}

html.is-leaving .transition-fade{
    opacity: 0;
    transform: translateX(0);
}

.container{
    display: grid;
    width: 96%;
    margin: 0 auto;
    gap: 1.8rem;
    grid-template-columns: 14rem auto 23rem;

}

a{
    color: var(--color-dark);
}

img{
    display: block;
    width: 100%;
}

h1{
    font-weight: 800;
    font-size: 1.8rem;
}

h2{
    font-size: 1.4rem;
}

h3{
    font-size: 0.87rem;
}

h4{
    font-size: 0.8rem;
}

h5{
    font-size: 0.77rem;
}
small{
    font-size: 0.75rem;
}
.profile-photo{
    width: 2.8rem;
    height: 2.8rem;
    border-radius: 50%;
    overflow: hidden;
}

.text-muted{
    color: var(--color-info-dark);
    text-align: right;
    margin-right: 3%;
}

p{
    color: var(--color-dark-variant);
}
b{
    color: var(--color-dark);
}
.primary{
    color: var(--color-primary);
}
.danger{
    color: var(--color-danger);
}
.success{
    color: var(--color-success);
}
.warning{
    color: var(--color-warning);
}

aside{
    height: 100vh;
}
/* aside .top{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 1.4rem;
    position: fixed;
} */


aside .close{
    display: none;
}

/* ====================== SIDEBAR ============== */
aside .sidebar{
    display: flex;
    flex-direction: column;
    height: 86vh;
    position: relative;
    position: fixed;
    top: 3rem;
}

aside h3{
    font-weight: 500;    
}

aside .sidebar a{
    display: flex;
    color: var(--color-info-dark);
    margin-left: 2rem;
    gap: 1rem;
    align-items: center;
    position: relative;
    height: 3.7rem;
    transition: all 300ms ease;
    margin-top: 2rem;
}

aside .sidebar a i{
    font-size: 1.6rem;
    transition: all 300ms ease;
}

aside .sidebar a:last-child{
    position: absolute;
    bottom: 2rem;
    width: 100%;
}

aside .sidebar a.active{
    background: var(--color-light);
    color: var(--color-primary);
    margin-left: 0;
}

aside .sidebar a.active::before{
    content: '';
    width: 6px;
    height: 100%;
    background: darkblue;
}

aside .sidebar a.active i{
    color: darkblue;
    margin-left: calc(1rem - 3px);
}

aside .sidebar a:hover{
    color: darkblue;
}

aside .sidebar a:hover i{
    margin-left: 1rem;
}



/* ------------------- MAIN ---------------- */

main{
    margin-top: 1.4rem;
    margin-left: 10%;
    width: 110%;
}


main .insights{
    display: block;
}

main .insights > div{
    background: var(--color-white);
    padding: var(--card-padding);
    border-radius: var(--card-border-radius);
    margin-top: 1rem;
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;
}

main .insights > div:hover{
    box-shadow: none;
}

main .insights > div i{
    background-color: var(--color-primary);
    padding: .5rem;
    border-radius: 50%;
    color: var(--color-white);
    font-size: 2rem;
}

main .insights > div.expenses i{
    background-color: var(--color-danger);
}

main .insights > div.income i{
    background-color: var(--color-success);
}

main .insights > div .middle{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

main .insights h3{
    margin: 1rem 0 .6rem;
    font-size: 1rem;
}

main .insights .progress{
    position: relative;
    width: 92px;
    height: 92px;
    border-radius: 50%;
}

main .insights svg{
    width: 7rem;
    height: 7rem;
}

main .insights svg circle{
    fill: none;
    stroke: var(--color-primary);
    stroke-width: 14;
    stroke-linecap: round;
    transform: translate(5px, 5px);
}

main .insights .sales svg circle{
    stroke-dashoffset: -30;
    stroke-dasharray: 100;
}

main .insights .expenses svg circle{
    stroke-dashoffset: 200;
    stroke-dasharray: 100;
}



main .insights .progress .number{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

main .insights small{
    margin-top: 1.3rem;
    display: block;
}

/* ---------------- RECENT ORDERS ------------------ */

main .recent-orders{
    margin-top: 2rem;
}

main .recent-orders h2{
    margin-bottom: .8rem;

}

main .recent-orders table{
    background: var(--color-white);
    width: 100%;
    border-radius: var(--card-border-radius);
    padding: var(--card-padding);
    text-align: center;
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;
}

main .recent-orders table:hover{
    box-shadow: none;
}

main table tbody td{
    height: 2.8rem;
    border-bottom: 1px solid var(--color-light);
    color: var(--color-dark-variant);
}

main table tbody tr:last-child td{
    border: none;
}

main .recent-orders a{
    text-align: center;
    display: block;
    margin: 1rem auto;
    color: var(--color-primary);
}

/* ----------- RIGHT --------------- */

.right{
    margin-top: 1.4rem;
}

.right .top{
    display: flex;
    justify-content: end;
    gap: 2rem;
}

.right .top button{
    display: none;
}

.right .top .profile{
    display: flex;
    gap: 2rem;
    text-align: right;
}

/* ------------ RECENT UPDATES ----------- */

.right .recent-updates{
    margin-top: 1rem;
}

.right .recent-updates h2{
    margin-bottom: .8rem;
}

.right .recent-updates .updates{
    background: var(--color-white);
    padding: var(--card-padding);
    border-radius: var(--card-border-radius);
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;
}

.right .recent-updates .updates:hover{
    box-shadow: none;
}

.right .recent-updates .updates .update{
    display: grid;
    grid-template-columns: 2.6rem auto;
    gap: 1rem;
    margin-bottom: 1rem;
}


/* ------------- MEDIA QUERIES/BREAKPOINTS --------------- */

@media screen and (max-width: 1200px) {
    .container{
        width: 94%;
        grid-template-columns: 7rem auto 23rem;
    }

    aside .logo h2{
        display: none;
    }

    aside .sidebar h3{
        display: none;
    }

    aside .sidebar a{
        width: 5.6rem;
    }

    aside .sidebar a:last-child{
        position: relative;
        margin-top: 1.8rem;
    }

    main .insights{
        grid-template-columns: 1fr;
        gap: 0;
    }

    main .recent-orders{
        width: 94%;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        margin: 2rem 0 0 8.8rem;
    }

    main .recent-orders table{
        width: 83vw;
    }

    main table thead tr th:last-child, main table thead tr th:first-child{
        display: none;
    }
    main table tbody tr td:last-child, main table tbody tr td:first-child{
        display: none;
    }
}

@media screen and (max-width: 768px) {
    .container{
        width: 100%;
        grid-template-columns: 1fr;
    }

    aside{
        position: fixed;
        left: -100%;
        background: var(--color-white);
        width: 18rem;
        z-index: 3;
        box-shadow: 1rem 3rem 4rem var(--color-light);
        height: 100vh;
        padding-right: var(--card-padding);
        display: none;
        animation: showMenu 400ms ease forwards;
    }

    @keyframes showMenu {
        to{
            left: 0;
        }
    }
    aside .logo{
        margin-left: 1rem;
    }

    .aside .logo h2{
        display: inline;
    }

    aside .sidebar h3{
        display: inline;
    }
    
    .aside .sidebar a{
        width: 100%;
        height: 3.4rem;
    }

    aside .sidebar a:last-child{
        position: absolute;
        bottom: 5rem;
    }

    aside .close{
        display: inline-block;
        cursor: pointer;
    }

    main{
        margin-top: 8rem;
        padding: 0 1rem;
    }

    main .recent-orders{
        position: relative;
        margin: 3rem 0 0 0;
        width: 100%;
    }

    main .recent-orders table{
        width: 100%;
        margin: 0;
    }

    .right{
        width: 94%;
        margin: 0 auto 4rem;
    }

    .right .top{
        position: fixed;
        top: 0;
        left: 0;
        align-items: center;
        padding: 0 .8rem;
        height: 4.6rem;
        background: var(--color-white);
        width: 100%;
        margin: 0;
        z-index: 2;
        box-shadow: 0 1rem 1rem var(--color-light);
    }

    .right .profile .info{
        display: none;
    }

    .right .top button{
        display: inline-block;
        background: transparent;
        cursor: pointer;
        color: var(--color-dark);
        position: absolute;
        left: 1rem;
    }

    .right .top button i{
        font-size: 2rem;
    }
}
    </style>
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
                
                
                <a href="#">
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