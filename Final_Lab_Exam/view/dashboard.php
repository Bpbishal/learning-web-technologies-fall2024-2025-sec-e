<?php
session_start();
$username=$_SESSION['username'];
?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome <?=$username?></h1>    


    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th colspan="2">Dashboard</th>
        </tr>
        <tr>
            
            <td><a href="newreg.html">Register new author</a></td>
        </tr>
        <tr>
            <td><a href="authlist.php">Show All author</a></td>
        </tr>
    </table>