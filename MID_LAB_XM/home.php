<?php
    session_start();
    if(!isset($_SESSION['status'])){
        header('location: login.html');  
    }
?>


<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome Home! <?=$_SESSION['username']?></h1>    
        <table>
            <tr>
                <td>Email:</td>
                <td><?= $_SESSION['email']?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><?=$_SESSION['gender']?></td>
            </tr>
            <tr>
                <td><a href="logout.php">logout</a></td>
            </tr>
</body>
</html>
