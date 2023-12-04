<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/doctorAnnouncements.php");
require_once(__ROOT__ . "view/viewDrAnnouncements.php");
require_once(__ROOT__ . "controller/doctorAnnouncement.php");

$model = new DoctorAnnouncementsModel();
$controller = new DoctorAnnouncementsController($model);
$view = new DoctorAnnouncementsView($controller, $model);
if (isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'love') {
        
        $controller->insert();
   
    }
 
}
// $view->output();
?>
<?php
 echo $view->output()
 ?>