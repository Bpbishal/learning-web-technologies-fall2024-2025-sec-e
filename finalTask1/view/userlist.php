<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.html');  
    }

    $users = [
        ['id'=>1, 'username'=>'alamin', 'email'=>'alamin@aiub.edu', 'password'=>12],
        ['id'=>2, 'username'=>'alamin', 'email'=>'alamin@aiub.edu', 'password'=>12],
        ['id'=>3, 'username'=>'alamin', 'email'=>'alamin@aiub.edu', 'password'=>12],
        ['id'=>4, 'username'=>'alamin', 'email'=>'alamin@aiub.edu', 'password'=>12]
    ];
?>


<html lang="en">
<head>
    <title>Userlist </title>
</head>
<body>
        <h2>User List</h2>    
        <a href="home.php"> Back </a> | 
        <a href="../controller/logout.php"> logout </a>

        <br>

        <table border=1>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php 
                for($i=0; $i<count($users); $i++){ 
            ?>
            <tr>
                <td><?php echo $users[$i]['id']; ?></td>
                <td><?=$users[$i]['username'] ?></td>
                <td><?=$users[$i]['email'] ?></td>
                <td>
                    <a href="edit.php?id=<?=$users[$i]['id']?>"> EDIT </a> |
                    <a href="delete.php"> DELETE </a> 
                </td>  
            </tr>

            <?php } ?>
        </table>
</body>
</html>
