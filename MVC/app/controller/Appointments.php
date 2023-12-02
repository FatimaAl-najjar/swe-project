<?php
// include '../includes/nav2.php';
 

require_once(__ROOT__ . "controller/Controller.php");

class AppointmentsController extends Controller {
    public function insert() {
        $name = $_REQUEST['name'];
        $date = $_REQUEST['date'];
        $time = $_REQUEST['time'];

        $this->model->insertAppointment($name, $date, $time);
    }

    public function edit() {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $date = $_REQUEST['date'];
        $time = $_REQUEST['time'];

        $this->model->editAppointment($id, $name, $date, $time);
    }
    
    public function delete() {
        $id = $_REQUEST['id'];

        $this->model->deleteAppointment($id);
    }
}
?>
?>
