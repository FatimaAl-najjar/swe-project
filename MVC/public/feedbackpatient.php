<?php include('static.php'); ?>
<?php

define('__ROOT__', "../app/");

// Include necessary files
require_once(__ROOT__ . "model/Feedbacks.php");
require_once(__ROOT__ . "controller/FeedbackController.php");
require_once(__ROOT__ . "view/ViewFeedback.php");

// Create instances of the model, controller, and view
$model = new Feedbacks();
$controller = new FeedbackController($model);
$view = new ViewFeedback($controller, $model);
if (isset($_GET['action']) && !empty($_GET['action'])) {
	switch($_GET['action']){
		case 'insert':
			$controller->insert();
			echo $view->output();
			break;
		case 'edit':
			echo $view->edit($_GET['id']);
			break;
		case 'editAction':
			$controller->edit($_GET['id']);
			echo $view->output();
			break;
		case 'delete':
			$controller->delete($_GET['id']);
			echo $view->output();
			break;
	}
}
else
	echo $view->output();

?>
