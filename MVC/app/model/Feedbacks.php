<?php
require_once(__ROOT__ . "model/Model.php");

class Feedbacks extends Model {

    public function insertFeedback($feedback, $user)
    {
        $sql = "INSERT INTO feedbacks (feedback, user) VALUES (?, ?)";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bind_param("ss", $feedback, $user);
        $statement->execute();

        if ($statement->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function editFeedback($id, $feedback)
    {
        $sql = "UPDATE feedbacks SET feedback = ? WHERE id = ?";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bind_param("si", $feedback, $id);
        $statement->execute();

        if ($statement->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteFeedback($id)
    {
        $sql = "DELETE FROM feedbacks WHERE id = ?";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bind_param("i", $id);
        $statement->execute();
        
        if ($statement->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function selectAllFeedbacks()
    {
        $sql = "SELECT * FROM feedbacks";
        $result = $this->getDbConnection()->query($sql);
        $feedbacks = array();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $feedbacks[] = $row;
            }
        }
        
        return $feedbacks;
    }
}
?>