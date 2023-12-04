<?php

require_once(__ROOT__ . "view/View.php");

class AnnouncementsView extends View {
    public function output() {
        $announcements = $this->model->getAnnouncements();

        echo "<h1>Announcements</h1>";

        foreach ($announcements as $announcement) {
            echo "<div class='announcement-card'>";
            echo "<img class='icon' src='../images/megaphone.jpg' alt='Microphone Icon'>";
            echo "<div>";
            echo "<p class='date'>" . date("F j, Y H:i:s", strtotime($announcement['date_added'])) . "</p>";
            echo "<p class='content'>" . $announcement['announcement'] . "</p>";
            echo "</div>";
            echo "</div>";
        }
    }
}
?>