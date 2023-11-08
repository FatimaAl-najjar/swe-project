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
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function AddPatient($FirstName, $LastName, $Email, $Password, $Phonenumber) {
        $FirstName = htmlspecialchars($FirstName);
        $LastName = htmlspecialchars($LastName);
        $Email = htmlspecialchars($Email);
        $Password = htmlspecialchars($Password);
        $Phonenumber = htmlspecialchars($Phonenumber);

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $sql = "INSERT INTO patient(FirstName, LastName, Email, Password, Phonenumber) 
                    VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Phonenumber')";
            $result = mysqli_query($this->conn, $sql);

            if ($result) {
                echo "User added successfully";
            }
        }
    }

}



?>