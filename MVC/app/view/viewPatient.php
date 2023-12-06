<?php

require_once(__ROOT__ . "view/View.php");

class ViewPatient extends View{	
	public function output(){
		$str = "";
		$str .= '<section class="home">';
		$str .= '<div class="form-container">';
		$str .= '<i class="uil uil-times form_close"></i>';
		$str .= '<div class="form view_form">';
		$str .= '<form action="#">';
		$str .= '<div class="card1">';
		$str .= '<h2 style="text-align: center;">My Profile</h2>';
		$str .= '<br><hr><br>';
		$str .= '<div class="profile-info">';
		$str .= '<label for="username" class="profile-label">User Name:</label>';
		$str .= '<p class="profile-value">Welcome ' . $this->model->getFirstName() . '</p>';
	
		$str .= '<label for="email" class="profile-label">Email:</label>';
		$str .= '<p class="profile-value">LastName ' . $this->model->getLastName() . '</p>';
	
		$str .= '<label for="phone" class="profile-label">Phone Number:</label>';
		$str .= '<p class="profile-value">phone: ' . $this->model->getPhonenumber() . '</p>';
	
		$str .= '<a href="PatientProfile.php?action=edit" class="button-link">Edit Profile</a><br><br>';
		$str .= '<a href="PatientProfile.php?action=signOut" class="button-link">Sign Out</a><br><br>';
		$str .= '</div>';
		$str .= '</div>';
		$str .= '</form>';
		$str .= '</div>';
		$str .= '</div>';
		$str .= '</section>';
		return $str;
	}
	
	function loginForm(){
		$str='<form action="index.php" method="post">
		<div><input type="text" name="name" placeholder="Enter name"/></div><br>
		<div><input type="password" name="password" placeholder="Enter password"/></div><br>
		<div><input type="submit" name="login"/></div>
		</form>';
		return $str;
	}

	function signupForm(){
		$str='<form action="index.php?action=insert" method="post">
		<div><input type="text" name="name" placeholder="Enter name"/></div><br>
		<div><input type="password" name="password" placeholder="Enter password"/></div><br>
		<div><input type="text" name="age" placeholder="Enter age"/></div><br>
		<div><input type="text" name="phone" placeholder="Enter phone"/></div><br>
		<div><input type="submit" /></div>
		</form>';
		return $str;
	}

	public function editForm(){
		$str='<form action="profile.php?action=editaction" method="post">
		<div>Name:</div><div> <input type="text" name="name" value="'.$this->model->getName().'"/></div><br>
		<div>Password:</div><div> <input type="password" name="password" value="'.$this->model->getPassword().'"/></div><br>
		<div>Age:</div><div> <input type="text" name="age" value="'.$this->model->getAge().'"/></div><br>
		<div>Phone: </div><div><input type="text" name="phone" value="'.$this->model->getPhone().'"/></div><br>
		<div><input type="submit" /></div>';
		return $str;
	}
}
?>
