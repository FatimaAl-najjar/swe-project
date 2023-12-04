<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Announcements.php");
require_once(__ROOT__ . "view/viewAnnouncement.php");
require_once(__ROOT__ . "controller/AnnouncementController.php");

$model = new AnnouncementsModel();
$controller = new AnnouncementsController($model);
$view = new AnnouncementsView($controller, $model);

$view->output();
?>