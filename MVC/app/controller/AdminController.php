<?php

require_once(__ROOT__ . "controller/Controller.php");

class AdminController extends Controller{
	public function addUser() {
		$FirstName = $_REQUEST['FirstName'];
		$LastName = $_REQUEST['LastName'];
		$Email = $_REQUEST['Email'];
		$Password = $_REQUEST['Password'];
		$Phonenumber = $_REQUEST['Phonenumber'];

		$this->model->insertUser($FirstName,$LastName,$Email,$Password,$Phonenumber);
	}

	public function edit() {
		// $name = $_REQUEST['name'];
		// $password = $_REQUEST['password'];
		// $age = $_REQUEST['age'];
		// $phone = $_REQUEST['phone'];

		// $this->model->editUser($name,$password,$age,$phone);
	}
	
	public function delete(){
		// $this->model->deleteUser();
	}
}
?>
