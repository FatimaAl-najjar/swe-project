<link rel="stylesheet" href="css/static.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
		$str = '<div class="container">
        <aside>
            <div class="top">
                
                <div class="close" id="close-btn">
                    <i class="bx bxs-log-out-circle"></i>
                </div>
            </div>

            <div class="sidebar">
                <a class="active" href="adminindex.php">
                    <i class=\'bx bxs-grid-alt\' ></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="addAdmin.php">
                    <i class=\'bx bx-add-to-queue\' ></i>
                    <h3>Add Admin</h3>
                </a>
                <a href="addPatient.php">
                    <i class=\'bx bxs-add-to-queue\'></i>
                    <h3>Add Patient</h3>
                </a>
                <a href="editpatient.php">
                    <i class=\'bx bxs-edit\'></i>
                    <h3>Edit Patient</h3>
                </a>
                <a href="delete_patient.php">
                    <i class=\'bx bxs-minus-square\'></i>
                    <h3>Delete Patient</h3>
                    <!-- <span class="message-count">26</span> -->
                </a>
                <a href="feedbacks.php">
                <i class=\'bx bxs-view-square\'></i>
                <h3>View Feedbacks</h3>
            </a>
                
                <a href=\'login.php?action=Logout\'>
                <i class=\'bx bxs-log-out\'></i>
                <h3>Logout</h3>
            </a>
            </div>
        </aside>
        <!--=================== END OF ASIDE ===================-->
        <main id="swup" class="transition-fade">
            <h1>My  Dashboard</h1>
            
            <div class="insights">
                <div class="sales">
                    <div class="middle">
                        <div class="left">
                            <h1>Add Admin</h1>
                           
                            <div class="card">
                                <form action="" method="post">
                                    <label>Email</label>
                                    <input type="text" name="Email" placeholder="Enter your email"><br>
                                    <label>Username</label>
                                    <input type="text" name="Username" placeholder="Enter your Username"><br>
                                    <label>Password</label>
                                    <input type="password" name="Password" placeholder="Enter your password" required><br>

                                    <button class="btn" type="submit" value="submit">Add</button>
                                    <button type="button" class="btn">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>';

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
   		 <input type="text" name="adminIDToDelete" placeholder="Enter admin ID"><br>
    	 <button class="btn" type="submit" name="action" value="Delete Admin">Delete Admin</button>
    	 <button class="btn" type="submit" name="cancel" formnovalidate>Cancel</button>
		</form>	
		</div>';
		return $str;
	}

	public function addPatientform(){
		$str = '<div class="container">
        <aside>
            <div class="top">
                
                <div class="close" id="close-btn">
                    <i class=\'bx bxs-log-out-circle\'></i>
                </div>
            </div>

            <div class="sidebar">
                <a class="active" href="adminindex.php">
                    <i class=\'bx bxs-grid-alt\' ></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="addAdmin.php">
                    <i class=\'bx bx-add-to-queue\' ></i>
                    <h3>Add Admin</h3>
                </a>
                <a href="addPatient.php">
                    <i class=\'bx bxs-add-to-queue\'></i>
                    <h3>Add Patient</h3>
                </a>
                <a href="editpatient.php">
                    <i class=\'bx bxs-edit\'></i>
                    <h3>Edit Patient</h3>
                </a>
                <a href="delete_patient.php">
                    <i class=\'bx bxs-minus-square\'></i>
                    <h3>Delete Patient</h3>
                    <!-- <span class="message-count">26</span> -->
                </a>
                
                <a href="feedbacks.php">
                <i class=\'bx bxs-view-square\'></i>
                <h3>View Feedbacks</h3>
            </a>
                <a href=\'login.php?action=Logout\'>
                <i class=\'bx bxs-log-out\'></i>
                <h3>Logout</h3>
            </a>
            </div>
        </aside>
        <!--=================== END OF ASIDE ===================-->
        <main id="swup" class="transition-fade">
            <h1>My  Dashboard</h1>
            
            <div class="insights">
                <div class="sales">
                    <div class="middle">
                        <div class="left">
                            <h1>Add Patient</h1>
                           
                            <div class="card">
                                <form action="" method="post">
                                    <label>First Name</label>
                                    <input type="text" name="FirstName" placeholder=" patient first name"><br>
                                    <label>Last Name</label>
                                    <input type="text" name="LastName" placeholder="patient last name"><br>
                                    <label>Email</label>
                                    <input type="text" name="Email" placeholder="patient email"><br>
                                    <label>Password</label>
                                    <input type="password" name="Password" placeholder="patient password"><br>
                                    <label>Phone number</label>
                                    <input type="text" name="Phonenumber" placeholder="patient phone number"><br>
                                    <button class="btn" type="submit" name="action" value="Add Patient">Add Patient</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>';

	return $str;
	}

	public function deletePatientForm() {
        $str = '<div class="container">
        <aside>
            <div class="top">
                
                <div class="close" id="close-btn">
                    <i class="bx bxs-log-out-circle"></i>
                </div>
            </div>

            <div class="sidebar">
                <a class="active" href="adminindex.php">
                    <i class="bx bxs-grid-alt"></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="addAdmin.php">
                    <i class="bx bx-add-to-queue"></i>
                    <h3>Add Admin</h3>
                </a>
                <a href="addPatient.php">
                    <i class="bx bxs-add-to-queue"></i>
                    <h3>Add Patient</h3>
                </a>
                <a href="editpatient.php">
                    <i class="bx bxs-edit"></i>
                    <h3>Edit Patient</h3>
                </a>
                <a href="delete_patient.php">
                    <i class="bx bxs-minus-square"></i>
                    <h3>Delete Patient</h3>
                    <!-- <span class="message-count">26</span> -->
                </a>
                <a href="feedbacks.php">
                <i class=\'bx bxs-view-square\'></i>
                <h3>View Feedbacks</h3>
            </a>
                <a href=\'login.php?action=Logout\'>
                    <i class=\'bx bxs-log-out\'></i>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!--=================== END OF ASIDE ===================-->
        <main id="swup" class="transition-fade">
            <h1>My Dashboard</h1>
            
            <div class="insights">
                <div class="sales">
                    <div class="middle">
                        <div class="left">
                            <h1>Delete Patient by ID</h1>
                           
                            <div class="card">
                                <form action="" method="post">
                                    <input type="text" name="patientIDToDelete" placeholder="Enter patient ID">
                                    <button class="btn" type="submit" name="action" value="Delete Patient">Delete Patient</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>';

return $str;
    }

	public function editPatientForm() {
		$str = '<div class="container">
        <aside>
            <div class="top">
                
                <div class="close" id="close-btn">
                    <i class="bx bxs-log-out-circle"></i>
                </div>
            </div>

            <div class="sidebar">
            <a class="active" href="adminindex.php">
                <i class=\'bx bxs-grid-alt\' ></i>
                <h3>Dashboard</h3>
            </a>
            <a href="addAdmin.php">
                <i class=\'bx bx-add-to-queue\' ></i>
                <h3>Add Admin</h3>
            </a>
            <a href="addPatient.php">
                <i class=\'bx bxs-add-to-queue\'></i>
                <h3>Add Patient</h3>
            </a>
            <a href="editpatient.php">
                <i class=\'bx bxs-edit\'></i>
                <h3>Edit Patient</h3>
            </a>
            <a href="delete_patient.php">
                <i class=\'bx bxs-minus-square\'></i>
                <h3>Delete Patient</h3>
                <!-- <span class="message-count">26</span> -->
            </a>
            <a href="feedbacks.php">
            <i class=\'bx bxs-view-square\'></i>
            <h3>View Feedbacks</h3>
        </a>
            
            <a href=\'login.php?action=Logout\'>
                    <i class=\'bx bxs-log-out\'></i>
                    <h3>Logout</h3>
                </a>
        </div>
        </aside>
        <!--=================== END OF ASIDE ===================-->
        <main id="swup" class="transition-fade">
            <h1>My Dashboard</h1>
            
            <div class="insights">
                <div class="sales">
                    <div class="middle">
                        <div class="left">
                            <h1>Edit Patient by ID</h1>
                           
                            <div class="card">
                                <form action="" method="post">
                                    <input type="text" name="patientIDToEdit" placeholder="Enter patient ID">
                                    <input type="text" name="updatedFirstName" placeholder="Updated First Name">
                                    <input type="text" name="updatedLastName" placeholder="Updated Last Name">
                                    <input type="text" name="updatedEmail" placeholder="Updated Email">
                                    <input type="text" name="updatedPassword" placeholder="Updated Password">
                                    <input type="text" name="updatedPhonenumber" placeholder="Updated Phonenumber">
                                    
                                    <button class="btn" type="submit" name="action" value="Edit Patient">Edit Patient</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>';

return $str;
    }




}
?>
