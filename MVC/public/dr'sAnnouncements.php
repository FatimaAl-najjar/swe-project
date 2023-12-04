<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/doctor'sAnnouncements.php");
require_once(__ROOT__ . "view/viewDr'sAnnouncements.php");
require_once(__ROOT__ . "controller/doctor'sAnnouncement.php");

$model = new DoctorAnnouncementsModel();
$controller = new DoctorAnnouncementsController($model);
$view = new DoctorAnnouncementsView($controller, $model);

$view->output();

?>