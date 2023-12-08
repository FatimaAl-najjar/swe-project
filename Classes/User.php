<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "clinic";

$conn = mysqli_connect($servername, $username, $password, $DB);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

class User
{
    public $ID;
    public $Email;
    public $Username;
    public $Password;

    function __construct($id)
    {
        		$this->ID = $row["ID"];
                $this->Email = $row["Email"];
				$this->Username = $row["Username"];
                $this->Password = $row["Password"];
               
    }

    static function find($id)
    {
		//hasa en elmafrood a3ml database lluser feha user types?
        $user = new User($id);
        return $user;
    }


    public function displayInfo()
    {
        echo "User ID: {$this->ID}<br>";
        echo "Email: {$this->Email}<br>";
        echo "Username: {$this->Username}<br>";
        echo "Password: {$this->Password}<br>";
    }

    
}
?>