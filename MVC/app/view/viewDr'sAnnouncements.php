<?php

require_once(__ROOT__ . "view/View.php");

class DoctorAnnouncementsView extends View {
    public function output() {
        $str = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/admin_announcements.css">
            <title>Announcements</title>
        </head>
        <body>
            <!-- Form for adding new announcements -->
            <section class="announcement">
                <div class="container">
                    <div class="center">
                        <h3>Announcements!</h3>
                        <p>Is there any new updates!</p>
                    </div>

                    <div class="action">
                        <form method="POST" action="">
                            <textarea type="text" name="announcement" placeholder="Enter announcement"></textarea>
                            <button type="submit" name="submit">Add Announcement</button>
                        </form>
                    </div>
                </div>
            </section>
        ';

        echo $str;
    }
}
?>