<?php
Define("__ROOT__","");

require_once(__ROOT__ . "controller/Controller.php");

class AdminController extends Controller{
	public function addUser() {
		$FirstName = $_REQUEST['FirstName'];
		$LastName = $_REQUEST['LastName'];
		$Email = $_REQUEST['Email'];
		$Password = $_REQUEST['Password'];
		$Phonenumber = $_REQUEST['Phonenumber'];

		$this->model->addUser($FirstName,$LastName,$Email,$Password,$Phonenumber);
	}

	public function editUser() {
		$FirstName = $_REQUEST['FirstName'];
		$LastName = $_REQUEST['LastName'];
		$Email = $_REQUEST['Email'];
		$Password = $_REQUEST['Password'];
		$Phonenumber = $_REQUEST['Phonenumber'];

		$this->model->editUser($FirstName,$LastName,$Email,$Password,$Phonenumber);
	}
	
	public function deleteUser(){
		 $this->model->deleteUser();
	}

	public function addAdmin(){
		$Email=$_REQUEST['Email'];
		$Username=$_REQUEST['Username'];
		$Password=$_REQUEST['Password'];

		$this->model->addadmin($Email,$Username,$Password);
	}
	public function deleteAdmin(){
		$this->model->deleteadmin();
	}
	public function adminlogin()
    {
        
        $Email = $_REQUEST['Email'];
		$Username=$_REQUEST['Username'];
        $Password = $_REQUEST['Password'];
        $this->model->login( $Email,$Username ,$Password);
        
    }

}
?>
