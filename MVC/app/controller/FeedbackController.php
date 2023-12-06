<?php
require_once(__ROOT__ . "controller/Controller.php");
require_once(__ROOT__ . "model/Feedbacks.php");

class FeedbackController extends Controller {

    public function insert()
    {
        $feedback = $_REQUEST['feedback'];
        $user = $_REQUEST['user'];
        $this->model->insertFeedback($feedback, $user);
    }

    public function edit($id)
    {
        $feedback = $_REQUEST['feedback'];
        $this->model->editFeedback($id, $feedback);
    }

    public function delete($id)
    {
        $this->model->deleteFeedback($id);
    }

    public function allFeedbacks()
    {
        $this->model->selectAllFeedbacks();
    }

}
?>