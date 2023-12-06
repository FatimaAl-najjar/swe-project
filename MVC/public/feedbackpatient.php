<?php

define('__ROOT__', "../app/");

// Include necessary files
require_once(__ROOT__ . "model/Feedback.php");
require_once(__ROOT__ . "controller/FeedbackController.php");
require_once(__ROOT__ . "view/ViewFeedback.php");

// Create instances of the model, controller, and view
$model = new Feedback("0");
$controller = new FeedbackController($model);
$view = new FeedbackView($controller, $model);

echo $view->output();
?>