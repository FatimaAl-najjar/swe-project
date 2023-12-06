<?php
require_once(__ROOT__ . "model/Feedback.php");
require_once(__ROOT__ . "controller/Controller.php");

class FeedbackController extends Controller {
    public function addFeedback($Patient, $Message) {
        $feedback = new Feedback(null, $Patient, $Message);
        $feedback->addFeedback($Patient, $Message);
    }
    
    public function editFeedback($ID, $Patient, $Message) {
        $feedback = new Feedback($ID);
        $feedback->editFeedback($Patient, $Message);
    }
    
    public function deleteFeedback($ID) {
        $feedback = new Feedback($ID);
        $feedback->deleteFeedback();
    }
    
    public function getFeedback($ID) {
        $feedback = new Feedback($ID);
        $patient = $feedback->getPatient();
        $message = $feedback->getMessage();
        // Do something with the patient and message data
    }
}
?>