<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "clinic";

$conn = mysqli_connect($servername, $username, $password, $DB);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>  
 <!-- <?php
//  class Database
//  {
//       private $servername = "localhost";
//     private $username = "root";
//     private $password = "";
//     private $dbname = "clinic";
//     public $conn='';
//     public function __construct()
//     {
//         try {
//             $conn = new PDO("mysql:host='localhost'; dbname='clinic'", $username="root",  $password="");
//             // set the PDO error mode to exception
//            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             echo "Connected successfully";
//           $conn = mysqli_connect($servername, $username, $password, $dbname);
//           } catch($conn->connect_error) {
//             echo "Connection failed: " . $e->getMessage();
//             die("Connection failed: " . mysqli_connect_error());
//           }
//           if(!$conn) {
//                 die("Connection failed: " . mysqli_connect_error());
//             }
//     }
//     function get_db(){
      
//       $conn = mysqli_connect("localhost", "root","", "clinic") or die("coudln't connect");
  
 
// return $conn;
//     }
// } -->

//   $conn = mysqli_connect($servername, $username, $password, $dbname);
//   echo "connected sucessfuly"
// if(!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// } -->

?>  -->