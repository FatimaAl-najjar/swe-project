<link rel="stylesheet" href="css/feedback.css">


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
		$Feedbacks = $this->model->getFeedbacks();
        echo "<h1>Feedback</h1>";
		$str = "";
		foreach ($Feedbacks as $Feedback) {
			$str .= "<div class='card'>";
			$str .= "<div><strong>Message:</strong> " . $Feedback->getMessage() . "</div>";
			$str .= "</div>";
			return $str;
		}
    }
}
?>