<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "clinic";

$conn = mysqli_connect($servername, $username, $password, $DB);

if(!$conn) {
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

    private $conn;
    // public function __construct($conn) {
    //     $this->conn = $conn;
    // }

    function __construct($id)	{
		if ($id !=""){
			$sql="SELECT * FROM patients WHERE 	ID = $id";
			$Patient = mysqli_query($GLOBALS['conn'], $sql);
			if ($row = mysqli_fetch_array($Patient)){
				$this->ID = $row["ID"];
				$this->FirstName = $row["FirstName"];
				$this->LastName = $row["LastName"];
				$this->Email = $row["Email"];
				$this->Password = $row["Password"];
				$this->Phonenumber = $row["Phonenumber"];
			}
		}
	}

    static function login($FirstName, $LastName, $Password){
		$sql="SELECT * FROM users WHERE FirstName='$FirstName' AND LastName='$LastName' AND Password='$Password'";	
		$result=mysqli_query($GLOBALS['conn'],$sql);
		if ($row=mysqli_fetch_array($result)){
			return new Patient($row[0]); 		
		}
		return NULL;
	}

    static function SelectAllPatients(){
		$sql="select * from users";
		$Patients = mysqli_query($GLOBALS['conn'],$sql);
        $Result = [];
        $i = 0;
		while ($row = mysqli_fetch_array($Patients)){
			$MyObj= new Patient($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
	}

    // public function addPatient($FirstName, $LastName, $Email, $Password, $Phonenumber) {
    //     $FirstName = htmlspecialchars($FirstName);
    //     $LastName = htmlspecialchars($LastName);
    //     $Email = htmlspecialchars($Email);
    //     $Password = htmlspecialchars($Password);
    //     $Phonenumber = htmlspecialchars($Phonenumber);

    //     $sql = "INSERT INTO patient(FirstName, LastName, Email, Password, Phonenumber) 
    //             VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";
    //     $result = mysqli_query($this->conn, $sql);

    //     if ($result) {
    //         echo "Patient added successfully";
    //     }
    //     else {
    //         echo "Error adding patient: " . mysqli_error($this->conn);
    //     }
    // }

    static function addPatient($FirstName, $LastName, $Email, $Password, $Phonenumber)	{
		$sql = "INSERT INTO patients (FirstName, LastName, Email, Password, Phonenumber) 
        VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";
		if(mysqli_query($GLOBALS['conn'],$sql)) {
            echo'Patient added succesfully!';
			return true;
        }
		else {
            echo 'Error adding patient: ' . mysqli_error( $GLOBALS['conn'] );
			return false;
        }
	}


    public function UpdatePatient($FirstName, $LastName, $Email, $Password, $Phonenumber) {
        $FirstName = htmlspecialchars($FirstName);
        $LastName = htmlspecialchars($LastName);
        $Email = htmlspecialchars($Email);
        $Password = htmlspecialchars($Password);
        $Phonenumber = htmlspecialchars($Phonenumber);
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $sql="UPDATE patients SET FirstName='$FirstName', LastName='$LastName', Email='$Email', Password='$Password',Phonenumber='$Phonenumber' 
	            WHERE id =".$_SESSION['id'];
            $result = mysqli_query($this->conn, $sql);
            if ($result) {
                echo 'Patient updated successfully!';
            }
        }
    }

    // public function deletePatient($FirstName, $LastName, $Email, $Password, $Phonenumber) {
    //     if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //         $id = $_SESSION['id'];
            
    //         $sql = "DELETE FROM patients WHERE id = $id";
    //         $result = mysqli_query($this->conn, $sql);
            
    //         if ($result) {
    //             echo 'Patient deleted successfully!';
    //         } else {
    //             echo 'Error deleting patient: ' . mysqli_error($this->conn);
    //         }
    //     }
    // }

    static function deletePatient($ObjPatient){
		$sql = "DELETE FROM users WHERE ID = " . $ObjPatient->ID;
		if (mysqli_query($GLOBALS['conn'],$sql)) {
            echo 'Patient DELETED successfully!';
			return true;
        }        
		else {
            echo 'Error deleting patient: '. mysqli_error($GLOBALS['conn']);
			return false;
        }
	}
}


?>