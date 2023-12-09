<?php
require_once(__ROOT__ . "model/Feedback.php");
require_once(__ROOT__ . "controller/Controller.php");

class FeedbackController extends Controller {
    public function addFeedback() {
        $Message = $_REQUEST['Message'];
        //validation
        $this->model->insertFeedback($Message);
    }
    
    public function editFeedback($ID) {
        $this->model->getFeedback($ID)->editFeedback($Message);
    }
    
    public function deleteFeedback($ID) {
        $this->model->getFeedback($ID)->deleteFeedback();
    }
    
}
?>