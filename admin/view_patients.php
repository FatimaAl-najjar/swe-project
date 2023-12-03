<?php
session_start();
include_once "../includes/dbh.inc.php";
include_once "../Classes/Admin.php";


$query = "SELECT * FROM patients";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error executing the query: ' . mysqli_error($conn));
}

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// mysqli_free_result($result);

?>

<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View all patients</title>
    <link rel="stylesheet" href="../css/admin_view.css">
</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1 style="text-align: center; color: white;">All patients</h1>
            <div class="buttons-container">
                <a href="add_patient.php"><button>Add user</button></a>
                <a href="delete_patient.php"><button>Delete user</button></a>
                <a href="edit_patient.php"><button>Edit user</button></a>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> First name </th>
                        <th> Last name </th>
                        <th> Email </th>
                        <th> Phone number </th>
                        <th> Actions </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $userData=Admin::viewUser();
                    foreach ($userData as $row): 
                    ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['FirstName']; ?></td>
                            <td><?php echo $row['LastName']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Phonenumber']; ?></td>
                            <td>
                                <a href="edit_patient.php/?user=<?=$row['ID']?>"><button>Edit user</button></a>
                                <!-- Delete button  -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </section>
    </main>
</body>

</html>