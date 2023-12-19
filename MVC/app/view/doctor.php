<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/static.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php
require_once(__ROOT__ . "model/Appointment.php");
require_once(__ROOT__ . "view/View.php");

 ?>
 
 <?php

class viewDoctor extends View {
    public function listAppointments() {
        $appointments = $this->model->getAllAppointments(); // Retrieve all appointments

        // Display the appointments with enhanced styling
        $str = "<div class='appointment-list'>";
        if (!empty($appointments)) {
            $str .= "<ul class='appointment-list'>";
            foreach ($appointments as $appointment) {
                $str .= "<li class='appointment-item'>";
                // $str .= "Patient ID: " . $appointment->getPatientId() . "<br>";
                $str .= "Date: " . $appointment->getDate() . "<br>";
                $str .= "Time: " . $appointment->getTime() . "<br>";
                $str .= "</li>";
            }
            $str .= "</ul>";
        } else {
            $str .= "<p>No appointments found.</p>";
        }
        $str .= "</div>";

        return $str;
    }
    public function output() {
         
       
        $str = "";
        $str .= " <section class='announcement'>";
        $str .= " <div class='container'>";
        $str .= " <div class='center'>";
        $str .= "<h3>Announcements!</h3>";
        $str .= " <p>Is there any new updates!</p>";
        $str .= " </div>";

        $str .= "<div class='action'>";
        $str .= "<form   action='drAnnouncements.php?action=love' method='POST'>";
        $str .= "<textarea type='text' name='announcement' placeholder='Enter announcement'></textarea>";
        $str .= "  <button type='submit'name='Submit'>Add Announcement</button>";
        $str .=  "</form>";
        $str .= "</div>";
        $str .= " </div>";
        $str .= "  </section>";
        

        return $str;
    }
    function addDoctorForm(){
        $str = '<div class="container">
        <aside>
            <div class="top">
                
                <div class="close" id="close-btn">
                    <i class="bx bxs-log-out-circle"></i>
                </div>
            </div>

            <div class="sidebar">
                <a class="active" href="drIndex.php">
                    <i class=\'bx bxs-grid-alt\' ></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="drAnnouncements.php">
                    <i class=\'bx bx-add-to-queue\' ></i>
                    <h3>Add Anouncement</h3>
                </a>
                <a href="doctorAppointment_index.php">
                    <i class=\'bx bxs-add-to-queue\'></i>
                    <h3>view Appointments</h3>
                </a>
                <a href="addDoctor.php">
                    <i class=\'bx bxs-edit\'></i>
                    <h3>Add Doctor</h3>
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
                            <h1>Add Doctor</h1>
                           
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
    function DoctorloginForm(){
		$str = '<div class="container">
        <aside>
            <div class="top">
                
                <div class="close" id="close-btn">
                    <i class="bx bxs-log-out-circle"></i>
                </div>
            </div>

            <div class="sidebar">
                <a class="active" href="drIndex.php">
                    <i class=\'bx bxs-grid-alt\' ></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="drAnnouncements.php">
                    <i class=\'bx bx-add-to-queue\' ></i>
                    <h3>Add Announcements</h3>
                </a>
                <a href="doctorAppointment_index.php">
                    <i class=\'bx bxs-add-to-queue\'></i>
                    <h3>view Appointments</h3>
                </a>
                <a href="addDoctor.php">
                    <i class=\'bx bxs-edit\'></i>
                    <h3>Add Doctor</h3>
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
                            <h1>Add Doctor</h1>
                           
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

}
?>