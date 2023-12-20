
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/static.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
<link rel="stylesheet" href="css/drAnnouncements.css">;
<?php
require_once(__ROOT__ . "model/doctorAnnouncements.php");
require_once(__ROOT__ . "view/View.php");

class DoctorAnnouncementsView extends View {
    public function output() {
         
       
       
        $str = '<div class="container">
        <aside>
            <div class="top">
                
                <div class="close" id="close-btn">
                    <i class="bx bxs-log-out-circle"></i>
                </div>
            </div>

            <div class="sidebar">
                <a class="active" href="drIndex.php">
                    <i class=\'bx bxs-grid-alt\' ></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="drAnnouncements.php">
                    <i class=\'bx bx-add-to-queue\' ></i>
                    <h3>Add Anouncement</h3>
                </a>
                <a href="doctorAppointment_index.php">
                    <i class=\'bx bxs-add-to-queue\'></i>
                    <h3>view Appointments</h3>
                </a>
                <a href="addDoctor.php">
                <i class=\'bx bx-add-to-queue\' ></i>
                    <h3>Add Doctor</h3>
                </a>
            
                
                
                <a href=\'login.php?action=Logout\'>
                <i class=\'bx bxs-log-out\'></i>
                <h3>Logout</h3>
            </a>
            </div>
        </aside>
        <!--=================== END OF ASIDE ===================-->
        <main id="swup" class="transition-fade">
            <h1>My  Dashboard</h1>
            
            <div class="insights">
                <div class="sales">
                    <div class="middle">
                        <div class="left">
                            <h1>Add Announcments</h1>
                           
                            <section class="announcement">
    <div class="container">
         <div class="center">
   
        </div>

        <div class="action">
        <form   action="drAnnouncements.php?action=love" method="POST">
       <textarea type="text" name="announcement" placeholder="Enter announcement"></textarea>
        <button type="submit"name="Submit">Add Announcement</button>
       </form>
        </div>
        </div>
          </section>
        
                        </div>
                    </div>
                </div>
            </div>
        </main>';
    
return $str;
}
}
?>


<!-- <?php
 
// require_once(__ROOT__ . "model/doctorAnnouncements.php");
// require_once(__ROOT__ . "view/View.php");
 
 

// class DoctorAnnouncementsView extends View {
//     public function output() {
//         $str = '
//         <!DOCTYPE html>
//         <html lang="en">
//         <head>
//             <meta charset="UTF-8">
//             <meta name="viewport" content="width=device-width, initial-scale=1.0">
//             <link rel="stylesheet" href="../css/admin_announcements.css">
//             <title>Announcements</title>
//         </head>
//         <body>
//             <!-- Form for adding new announcements -->
//             <section class="announcement">
//                 <div class="container">
//                     <div class="center">
//                         <h3>Announcements!</h3>
//                         <p>Is there any new updates!</p>
//                     </div>

//                     <div class="action">
//                         <form method="POST" action="">
//                             <textarea type="text" name="announcement" placeholder="Enter announcement"></textarea>
//                             <button type="submit" name="submit">Add Announcement</button>
//                         </form>
//                     </div>
//                 </div>
//             </section>
//         ';

//         echo $str;
//     }
// }
?> -->