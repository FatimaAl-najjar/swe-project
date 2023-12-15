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
		$str='<form action="" method="POST">
		<label>Email:</label>
		<input type="text" placeholder="Enter your email" name="Email" required><br>
		<label>Username:</label>
		<input type="text" placeholder="Enter your username" name="Username" required><br>
		<label>Password:</label>
		<input type="password" placeholder="Enter your password" name="Password" required><br>
	
		<button type="submit" value="submit">Login</button>
	    </form>';
		return $str;
	}

	function addAdminForm(){
		$str='<form action="" method="post">
		<label>Email:</label>
		<input type="text" name="Email" placeholder="Enter your email"><br>
		<label>Username:</label>
		<input type="text" name="Username" placeholder="Enter your Username"><br>
		<label>Password:</label>
		<input type="password" name="Password" placeholder="Enter your password" required><br>
		<div class="clearfix">
			<button class="btn" type="submit" value="submit">Add Admin</button>
			<button type="button" class="btn">Cancel</button>
		</div>
	    </form>
        </div>';
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

	public function deleteForm(){
		$str='<div id="todelete" class="card">
		<form id="deleteForm" action="" method="post">
		<input type="text" name="adminIDToDelete" placeholder="Enter admin ID"></br>
		<button class="btn" type="Submit" value="submit">Delete Admin</button>
		<button class="btn" name="cancel" formnovalidate>cancel</button>	
		</form>
		</div>';
		return $str;
	}
}
?>
