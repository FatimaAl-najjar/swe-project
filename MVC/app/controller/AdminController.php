<?php
 

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

	/*public function addAdmin(){
		$Email=$_REQUEST['Email'];
		$Username=$_REQUEST['Username'];
		$Password=$_REQUEST['Password'];

		$this->model->addadmin($Email,$Username,$Password);
	}*/
	public function addAdmin($Email, $Username, $Password) {
        return $this->model->addadmin($Email, $Username, $Password);
    }

	public function deleteAdmin($adminID) {
        $result = $this->model->deleteAdmin($adminID);

        if ($result === true) {
            echo "Admin with ID $adminID has been successfully deleted.";
        } else {
            echo "Error deleting Admin with ID $adminID: " . $result;
        }

	}


		public function adminLogin($email, $username, $password) {
			// Validate email format
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				return false; // Invalid email format
			}
	
			// Call the login method of the Admin model
			$admin = $this->model->adminLogin($email, $username, $password);
	
			return $admin;
		}
	}
    





?>
