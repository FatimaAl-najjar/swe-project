<?php

require_once(__ROOT__ . "view/View.php");

class FeedbackView extends View {
    public function output() {
        $feedbacks = $this->model->getFeedbacks();

        echo "<h1>Feedback</h1>";

        foreach ($feedbacks as $feedback) {
            echo "<p class='patient'>" . $feedback['Patient'] . "</p>";
            echo "<p class='message'>" . $feedback['Message'] . "</p>";
        }
    }
}
?>