<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admindashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>admindashboard</title>
</head>
<body>
    <?php include('./partials/admindesign.ejs'); ?>

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div><i id="menu-btn" class="fa fa-bars"></i></div>
                <div class="search" id="searchinput">
                   <button type="submit"> <i class="fa fa-search"></i></button>
                   <input type="text" placeholder="Search">
                </div>
            </div>
            <div class="profile">
                <i class="fa fa-bell"></i>
            </div>
        </div>
        <h2 class="i-name">
            Admin Dashboard
        </h2>

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Type</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['Firstname'] . ' ' . $user['Lastname']; ?></td>
                            <td><?php echo $user['Email']; ?></td>
                            <td><?php echo $user['Type']; ?></td>
                            <!-- Add more table cells based on your data structure -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
