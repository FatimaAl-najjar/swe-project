<?php

require_once(__ROOT__ . "controller/Controller.php");

class DoctorAnnouncementsController extends Controller {
    public function insert() {
        if (isset($_POST['Submit'])) {
            // $announcement = $_POST['announcement'];
            $announcement = $_REQUEST['announcement'];
            $dateAdded = date("Y-m-d H:i:s"); // Get the current date and time
    
            if (empty(trim($announcement))) {
                echo "Error: Announcement field is required";
            } else {
                $this->model->insertAnnouncement($announcement, $dateAdded);
                header("Location: drAnnouncements.php");  
            }
        }
    }
}
?>