<?php

class DoctorController extends Controller{
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

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
}
?>
