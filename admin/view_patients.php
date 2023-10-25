

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
            <h1 style="text-align: center;">All patients</h1>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['FirstName']; ?></td>
                            <td><?php echo $row['LastName']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Phonenumber']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>