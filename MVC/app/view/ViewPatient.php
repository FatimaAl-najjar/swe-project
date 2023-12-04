<?php

require_once(__ROOT__ . "view/View.php");

class ViewPatient extends View{	
	public function output(){
		$str="";
		$str.="<h1>Welcome ".$this->model->getFName()."</h1>";
		$str.="<h5>LastName: ".$this->model->getLName()."</h5>";
		$str.="<h5>Phone: ".$this->model->getPhonenumber()."</h5>";
		$str.="<br><br>";
		$str.="<a href='PatientProfile.php?action=edit'>Edit Profile </a><br><br>";
		$str.="<a href='PatientProfile.php?action=signOut'>SignOut </a><br><br>";
		$str.="<a href='PatientProfile.php?action=delete'>Delete Account </a>";
		return $str;
	}
	
	function loginForm(){
		$str='<div class="card">
		<h1>Login</h1>
	<form action="index.php" method="POST">
		<label>Email:</label>
		<input type="text" placeholder="please enter your email" name="Email" required><br>
		<label>Password:</label>
		<input type="password" placeholder="please enter your password" name="Password" required><br>
		<button class="btn" type="submit" value="submit">Login</button>
		<a href="landing.php"><button type="button" class="btn">Back</button></a>     </form>
	</div>';
		return $str;
	}

	function signupForm(){
		$str='   <div class="card">
        <form action="" method="post">
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
        <?php echo $errorMessage; ?>
    </div>';
		return $str;
	}

	public function editForm(){
		
	}
}
?>