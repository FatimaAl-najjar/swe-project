<?php

require_once(__ROOT__ . "view/View.php");

class ViewAdmin extends View{
	public function output(){
		$str="";
		$str.="<h1>Welcome ".$this->model->getName()."</h1>";
		$str.="<h5>Age: ".$this->model->getAge()."</h5>";
		$str.="<h5>Phone: ".$this->model->getPhone()."</h5>";
		$str.="<br><br>";
		$str.="<a href='profile.php?action=edit'>Edit Profile </a><br><br>";
		$str.="<a href='profile.php?action=movie'>My Movies </a><br><br>";
		$str.="<a href='profile.php?action=signOut'>SignOut </a><br><br>";
		$str.="<a href='profile.php?action=delete'>Delete Account </a>";
		return $str;
	}
	
	function loginForm(){
		$str='<div class="card">
            <h1>Login</h1>
            <form action="like" method="POST">
            <label>Email:</label>
            <input type="text" placeholder="please enter your email" name="Email" required><br>
            <label>Password:</label>
            <input type="password" placeholder="please enter your password" name="Password" required><br>
            <button class="btn" type="submit" value="submit">Login</button>
            <a href="landing.php"><button type="button" class="btn">Back</button></a>     </form>
            </div>
            <?php
            echo $errormessage;
            ?>';
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
