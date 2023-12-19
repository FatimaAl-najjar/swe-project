<?php
 

require_once(__ROOT__ . "controller/Controller.php");

class AdminController extends Controller{

	public function addPatient($FirstName, $LastName, $Email, $Password, $Phonenumber) {
        return $this->model->addPatient($FirstName, $LastName, $Email, $Password, $Phonenumber);
    }

	
	public function editPatient($patientID, $data) {
        $result = $this->model->editPatient($patientID, $data);

        if ($result === true) {
            echo "Patient with ID $patientID has been successfully edited.";
        } else {
            echo "Error editing Patient with ID $patientID: " . $result;
        }
    }
	
	public function deletePatient($patientID) {
        $result = $this->model->deletePatient($patientID);

        if ($result === true) {
            echo "Patient with ID $patientID has been successfully deleted.";
        } else {
            echo "Error deleting Patient with ID $patientID: " . $result;
        }
    }

	
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
