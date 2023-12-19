<?php
require_once(__ROOT__ . "controller/Controller.php");
class DoctorController extends Controller{
    // private $model;
    // private $view;

    // public function __construct($model, $view) {
    //     $this->model = $model;
    //     $this->view = $view;
    // }

    public function addAnnouncement($announcement, $date_added) {
        $result = $this->model->addAnnouncement($announcement, $date_added);

        if ($result) {
            // Optionally, you can update the view or perform other actions
            echo "Announcement added successfully!";
        } else {
            echo "Error adding announcement.";
        }
    }

    public function viewAnnouncementForm() {
        $this->view->displayAnnouncementForm();
    }
    public function addDoctor($Email, $Username, $Password) {
        return $this->model->addDoctor($Email, $Username, $Password);
    }
    public function doctorLogin($email, $username, $password) {
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false; // Invalid email format
        }

        // Call the login method of the Admin model
        $admin = $this->model->doctorLogin($email, $username, $password);

        return $admin;
    }
}
?>
