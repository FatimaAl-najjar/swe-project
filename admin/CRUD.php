<?php
// Include the Patient class file
require_once 'Patient.php';

// Establish a database connection
$hostname = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
}

// Instantiate the Patient class
$patient = new Patient($conn);

//Now, you can use the `$patient` object to call the methods defined in the `Patient` class, such as:

// Example usage
$patient->addPatient('John', 'Doe', 'john@example.com', 'password123', '123456789');
$patient->UpdatePatient(2, 'Jane', 'Smith', 'jane@example.com', 'newpassword456', '987654321');

?>