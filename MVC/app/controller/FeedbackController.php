<?php
// require_once(__ROOT__ . "model/Feedback.php");
require_once(__ROOT__ . "controller/Controller.php");

class FeedbackController extends Controller {
    public function insert() {
        $Message = $_REQUEST['Message'];
        //validation
        $this->model->insertFeedback($Message);
    }
    
    public function edit($ID) {
        $Message = $_REQUEST['Message'];
        $this->model->getFeedback($ID)->editFeedback($Message);
    }
    
    public function delete($ID) {
        $this->model->getFeedback($ID)->deleteFeedback();
    }
    
}
?>