<link rel="stylesheet" href="css/feedback.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php

require_once(__ROOT__ . "view/View.php");

class ViewFeedback extends View {

    public function output(){
		
		$str = "";
foreach ($this->model->getFeedbacks() as $Feedback) {
    // $str .= "<div class='card'>";
    // $str .= "<div><strong>Message:</strong> " . $Feedback->getMessage() . "</div>";
    // $str .= "</div>";
}

$str .= "<div class='card'>";
$str .= " <h1>Add Your Feedback</h1>";
$str .= "<form action='feedbackpatient.php?action=insert' method='post'>";
$str .= "<input class=\"text1\" type='text' name='Message' placeholder='Enter message' />";
$str .= "<input type='submit' value='Submit' class='btn' />";
$str .= "</form>";
;
$str .= "</div>";

return $str;

	}
	
	public function edit($ID){
		$str = "";
		$str.="<table>";
		$str.="<tr><th>Message</th><th>Action</th></tr>";
		foreach($this->model->getFeedbacks() as $Feedback){
			if($Feedback->getID()===$ID) 	{
				$str.="<tr>";
				$str.="<form action='feedbackpatient.php?action=editAction&id=".$Feedback->getID()."' method='post'>";
				$str.="<td><input type='text' name='Message' value='".$Feedback->getMessage() ."'>  </td> ";
				$str.="<td><input type='submit' value='Change'/></td>";
				$str.="</form>";
				$str.="</tr>";
			}
			else	{
				$str.="<tr>";
				$str.="<td>".$Feedback->getMessage() ."  </td> ";
				$str.="<td><a href='feedbackpatient.php?action=edit&id=".$Feedback->getID()."'>Edit</a></td>";
				$str.="</tr>";
			}
		}
		$str.="</table>";
		$str.="<a href='feedbackpatient.php'>Back </a>";
		return $str;
	}


	public function listedfeedback() {
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
		<main id="swup" class="transition-fade">
			<h1>My Dashboard</h1>

			<div class="insights">
				<div class="sales">
					<div class="middle">
						<div class="left">
							<h1>Feedback</h1>';

$Feedbacks = $this->model->getFeedbacks();

foreach ($Feedbacks as $Feedback) {
    $str .= "<div class='card'>";
    $str .= "<div><strong>ID of patient:</strong> " . $Feedback->getPatientID() . "</div>";
    $str .= "<div><strong>Message:</strong> " . $Feedback->getMessage() . "</div>";
    $str .= "</div>";
}

$str .= '</div>
        	</div>
        </div>
    </div>
</main>
</div>';

return $str;
	}
}
?>
