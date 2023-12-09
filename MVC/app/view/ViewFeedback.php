<?php

require_once(__ROOT__ . "view/View.php");

class ViewFeedback extends View {
    // public function output() {
    //     $feedbacks = $this->model->getFeedbacks();

    //     echo "<h1>Feedback</h1>";

    //     foreach ($feedbacks as $feedback) {
    //         echo "<p class='content'>" . $feedback['ID'] ." ".$feedback['PatientID']." ".$feedback['Message']."</p>";
            
    //     }
    // }

    // public function insertFeedback(){
        
    // }

    public function output(){
		$str = "";
		$str.="<table>";
		$str.="<tr><th>Message</th><th>Action</th></tr>";
		foreach($this->model->getFeedbacks() as $Feedback){
			$str.="<tr>";
			$str.="<td>".$Feedback->getMessage() ."  </td> ";
			$str.="<td>
			<a href='feedbackpatient.php?action=edit&id=".$Feedback->getID()."'>Edit</a>
			/
			<a href='feedbackpatient.php?action=delete&id=".$Feedback->getID()."'>Delete</a>
			</td>";
			$str.="</tr>";
		}
		$str.="<tr>";
		$str.="<form action='feedbackpatient.php?action=insert' method='post'>";
		$str.="<td><input type='text' name='Message' placeholder='Enter message'/></td>";
		$str.="<td><input type='submit' value='insert'/></td>";
		$str.="</form>";
		$str.="</tr>";
		$str.="</table>";
		$str.="<a href='fed.php'>Back</a>";

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
}
?>