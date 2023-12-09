<?php
// require_once(__ROOT__ . "model/Feedback.php");
require_once(__ROOT__ . "controller/Controller.php");

class FeedbackController extends Controller {
    public function insert() {
        $Message = $_REQUEST['Message'];
        //validation
        $this->model->insertFeedback($Message);
    }
    
    public function edit() {
        $Message = $_REQUEST['Message'];
        $this->model->editFeedback($Message);
    }
    
    public function delete() {
        $this->model->deleteFeedback();
    }
    
}
?>