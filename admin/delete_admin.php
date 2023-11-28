
<?php
session_start();
// Include connection
include_once "../includes/dbh.inc.php";
// Include patient class
include_once "../Classes/Admin.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the patient ID to be deleted
    $adminID = $_POST['adminID'];
    $patient = Admin::find($adminID);
    if ($admin) {
        ?>
        <script>
            var delete =document.getElementById('todelete');
            function removeDOMElement() {
                delete.remove();
                down.innerHTML = "The paragraph is deleted.";
            }
        </script>
        <?php
        echo "ID:" . $admin->ID . "<br>";
        echo "Email:" . $admin->Email . "<br>";
        echo "Username:" . $admin->Usernameame . "<br>";
        echo "Password:" . $admin->Password . "<br>";
    }
    else {
        echo "No admin with this id";
    }
    // echo''.$patientID.'';

}
// Prepare the DELETE query
// $sql = "DELETE FROM patients WHERE patientID = ?";
?>