<?php 

define('__ROOT__', "../app/");

// Include necessary files
require_once(__ROOT__ . "model/Feedback.php");
require_once(__ROOT__ . "controller/FeedbackController.php");
require_once(__ROOT__ . "view/ViewFeedback.php");
 
// Create instances of the model, controller, and view
$model = new Feedback("");
 
$controller = new FeedbackController($model);
$view = new ViewFeedback($controller, $model);

echo $view->listedfeedback()
?>
