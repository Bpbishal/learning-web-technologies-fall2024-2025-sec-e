<?php
require_once('../model/usermodel.php');
$users = getAllUser(); 
?>
<html>
<head>
    <title>User Information</title>
</head>
<body>
    <h1>User Information</h1>
    <a href="../controller/logout.php"><button>Logout</button></a>
    <table border="1" style="width: 80%; margin: auto; text-align: center;">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= $user['username'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="update.php?id=<?= $user['id'] ?>">Update</a> | 
                <a href="../controller/delete.php?id=<?= $user['id'] ?>" >Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
