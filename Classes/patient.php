<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "clinic";

$conn = mysqli_connect($servername, $username, $password, $DB);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

class Patient
{
    public $ID;
    public $FirstName;
    public $LastName;
    public $Email;
    public $Password;
    public $Phonenumber;

    function __construct($id)
    {
        if ($id != "") {
            $sql = "SELECT * FROM patients WHERE ID = $id";
            $Patient = mysqli_query($GLOBALS['conn'], $sql);
            if ($row = mysqli_fetch_array($Patient)) {
                $this->ID = $row["ID"];
                $this->FirstName = $row["FirstName"];
                $this->LastName = $row["LastName"];
                $this->Email = $row["Email"];
                $this->Password = $row["Password"];
                $this->Phonenumber = $row["Phonenumber"];
            }
        }
    }

    static function find($id)
    {
        $sql = "SELECT * FROM patients WHERE ID='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($row = mysqli_fetch_array($result)) {
            return new Patient($row[0]);
        }
        return NULL;
    }

    static function login($FirstName, $LastName, $Password)
    {
        $sql = "SELECT * FROM patients WHERE FirstName='$FirstName' AND LastName='$LastName' AND Password='$Password'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($row = mysqli_fetch_array($result)) {
            return new Patient($row[0]);
        }
        return NULL;
    }

    static function SelectAllPatients()
    {
        $sql = "SELECT * FROM patients";
        $Patients = mysqli_query($GLOBALS['conn'], $sql);
        $Result = [];
        $i = 0;
        while ($row = mysqli_fetch_array($Patients)) {
            $MyObj = new Patient($row["ID"]);
            $Result[$i] = $MyObj;
            $i++;
        }
        return $Result;
    }

    static function addPatient($FirstName, $LastName, $Email, $Password, $Phonenumber)
    {
        $sql = "INSERT INTO patients (FirstName, LastName, Email, Password, Phonenumber) 
        VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";
        if (mysqli_query($GLOBALS['conn'], $sql)) {
            echo 'Patient added successfully!';
            return true;
        } else {
            echo 'Error adding patient: ' . mysqli_error($GLOBALS['conn']);
            return false;
        }
    }

    function updatePatient()
    {
        $sql = "UPDATE patients SET FirstName = '" . $this->FirstName . "', LastName = '$this->LastName', Password = '$this->Password' WHERE ID = " . $this->ID;
        if (mysqli_query($GLOBALS['conn'], $sql)) {
            echo 'Patient updated successfully!';
            return true;
        } else {
            echo 'Error updating patient: ' . mysqli_error($GLOBALS['conn']);
            return false;
        }
    }

    static function deletePatient($ObjPatient)
    {
        $sql = "DELETE FROM patients WHERE ID = " . $ObjPatient->ID;
        if (mysqli_query($GLOBALS['conn'], $sql)) {
            echo 'Patient DELETED successfully!';
            return true;
        } else {
            echo 'Error deleting patient: ' . mysqli_error($GLOBALS['conn']);
            return false;
        }
    }

    function addFeedback($feedback)
    {
        $sql = "INSERT INTO feedback (PatientID, Feedback) VALUES ('$this->ID', '$feedback')";
        if (mysqli_query($GLOBALS['conn'], $sql)) {
            echo 'Feedback added successfully!';
            return true;
        } else {
            echo 'Error adding feedback: ' . mysqli_error($GLOBALS['conn']);
            return false;
        }
    }
}
?>