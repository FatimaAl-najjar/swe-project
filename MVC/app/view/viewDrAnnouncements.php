

<link rel="stylesheet" href="css/drAnnouncements.css">;
<?php
require_once(__ROOT__ . "model/doctorAnnouncements.php");
require_once(__ROOT__ . "view/View.php");

class DoctorAnnouncementsView extends View {
    public function output() {
         
       
        $str = "";
        $str .= " <section class='announcement'>";
        $str .= " <div class='container'>";
        $str .= " <div class='center'>";
        $str .= "<h3>Announcements!</h3>";
        $str .= " <p>Is there any new updates!</p>";
        $str .= " </div>";

        $str .= "<div class='action'>";
        $str .= "<form   action='drAnnouncements.php?action=love' method='POST'>";
        $str .= "<textarea type='text' name='announcement' placeholder='Enter announcement'></textarea>";
        $str .= "  <button type='submit'name='Submit'>Add Announcement</button>";
        $str .=  "</form>";
        $str .= "</div>";
        $str .= " </div>";
        $str .= "  </section>";
        

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