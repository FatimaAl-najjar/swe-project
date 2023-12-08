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

	public function addAdmin(){
		$Email=$_REQUEST['Email'];
		$Username=$_REQUEST['Username'];
		$Password=$_REQUEST['Password'];

		$this->model->addadmin($Email,$Username,$Password);
	}
	public function deleteAdmin(){
		$this->model->deleteadmin();
	}
	public function adminlogin($Email, $Username, $Password, $db)
    {
		$stmt =$this->db->prepare("SELECT * FROM admins WHERE Email =? AND Username=? AND Password=?");
		$stmt->bimd_param('sss',$Email,$Username,$Password);
		$stmt->execute();
        
		$result= $stmt->get_result()->fetch_assoc();

		if($result !=null){
			$_SESSION['Id']=$result['Id'];
			$_SESSION['Email']=$result['Email'];
			$_SESSION['Username']=$result['Username'];
			$_SESSION['Password']=$result['Password'];

	    /* $Email = $_REQUEST['Email'];
		$Username=$_REQUEST['Username'];
        $Password = $_REQUEST['Password'];
        $this->model->login( $Email,$Username ,$Password);
        */
    }else{
		echo"invalid admin data";
	}

}


}
?>
