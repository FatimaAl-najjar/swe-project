<?php

require_once(__ROOT__ . "controller/Controller.php");

class PatientController extends Controller{
	public function insert() {
		$FirstName = $_REQUEST['FirstName'];
        $LastName = $_REQUEST['LastName'];
        $Email = $_REQUEST['Email'];
		$Password= $_REQUEST['Password'];
		$Phonenumber = $_REQUEST['Phonenumber'];
//validation
		$this->model->insertPatient($FirstName,$LastName,$Email,$Password,$Phonenumber);
	}

	public function edit() {
		$FirstName = $_REQUEST['FirstName'];
        $LastName = $_REQUEST['LastName'];
        $Email = $_REQUEST['Email'];
		$Password= $_REQUEST['Password'];
		$Phonenumber = $_REQUEST['Phonenumber'];
		$this->model->editPatient($FirstName,$LastName,$Email,$Password,$Phonenumber);
	}
	
	public function delete(){
		$this->model->deletePatient();
	}
}
?>