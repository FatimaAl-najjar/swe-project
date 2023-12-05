

<?php

require_once(__ROOT__ . "view/View.php");

class ViewPatient extends View{	
	public function output() {
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
		$str .= '<label for="firstname" class="profile-label">First Name:</label>';
		$str .= '<p class="profile-value"> ' . $this->model->getFName() . '</p>';
		$str .= '<label for="lastname" class="profile-label">Last Name:</label>';
		$str .= '<p class="profile-value"> ' . $this->model->getLName() . '</p>';
		$str .= '<label for="email" class="profile-label">Email:</label>';
		$str .= '<p class="profile-value"> ' . $this->model->getEmail() . '</p>';
		$str .= '<label for="password" class="profile-label">Password:</label>';
		$str .= '<p class="profile-value"> ' . $this->model->getPassword() . '</p>';
		$str .= '<label for="phone" class="profile-label">Phone Number:</label>';
		$str .= '<p class="profile-value"> ' . $this->model->getPhonenumber() . '</p>';
	
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
		<div><input type="text" name="FirstName" placeholder="Enter name"/></div><br>
		<div><input type="password" name="Password" placeholder="Enter password"/></div><br>
		<div><input class="btn" type="submit" name="login"/></div>
		</form>';
		return $str;
	}

	function signupForm(){
		$str='<div class="card">
        <form action="signup.php?action=insert" method="post">
            <label>First Name:</label>
            <input type="text" name="FirstName" placeholder="Enter your first name"><br>
            <label>Last Name:</label>
            <input type="text" name="LastName" placeholder="Enter your last name"><br>
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Enter your email"><br>
            <label>Password:</label>
            <input type="password" name="Password" placeholder="Enter your password"><br>
            <label>Re-enter Password:</label>
            <input type="password" name="repeatPassword" placeholder="Re-enter your password" required><br>
            <label>Phone number:</label>
            <input type="text" name="Phonenumber" placeholder="Enter your phone number"><br>
            <button class="btn" type="submit" value="submit">Sign Up</button>
            <button class="btn" name="cancel" formnovalidate>Cancel</button>
        </form>
    </div>';
		return $str;
	}

	public function editForm(){
		$str='<form action="PatientProfile.php?action=editaction" method="post">
		<div>First Name:</div><div> <input type="text" name="FirstName" value="'.$this->model->getFName().'"/></div><br>
		<div>First Name:</div><div> <input type="text" name="LastName" value="'.$this->model->getLName().'"/></div><br><div>Email:</div><div>
		 <input type="text" name="Email" value="'.$this->model->getEmail().'"/></div><br>
		<div>Password:</div><div> <input type="password" name="Password" value="'.$this->model->getPassword().'"/></div><br>
		<div>Phone: </div><div><input type="text" name="Phonenumber" value="'.$this->model->getPhonenumber().'"/></div><br>
		<div><input type="submit" /></div>';
		return $str;
	}
}
?>