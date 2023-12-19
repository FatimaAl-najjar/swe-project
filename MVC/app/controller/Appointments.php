<?php
// include '../includes/nav2.php';


require_once(__ROOT__ . "controller/Controller.php");

class AppointmentsController extends Controller {
    public function insert() {
        // $patientId = $_REQUEST['patients_id']; // Add the patient's ID
        $date = $_REQUEST['day'];
        $time = $_REQUEST['duration'];

        $this->model->insertAppointment($date, $time); // Pass the patient's ID to the insertAppointment method
        
        // Redirect to the booking form page
        header("Location: appointment_index.php");
    }
    public function edit() {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['patients_id'];
        $date = $_REQUEST['day'];
        $time = $_REQUEST['duration'];

        $this->model->editAppointment($id, $name, $date, $time);
    }
    
    public function delete() {
        $id = $_REQUEST['id'];

        $this->model->deleteAppointment($id);
    }
}
?>
 
