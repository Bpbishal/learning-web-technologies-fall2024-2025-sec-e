<?php
session_start();
if($_SESSION['status'] == true){
    
?>

    <html>
        <head>
            <title>Home Page</title>
        </head>
            <body>
                <h1 align="center">User Information</h1>
                <table align="center">
                    <tr>
                        <td><b>Name </b></td>
                        <td>
                       : <?php echo $_SESSION["username"] ?> 
                        </td>
                    </tr>

                    <tr>
                        <td> <b>Email</b></td>
                        <td>
                       : <?php echo $_SESSION["email"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td> <b>ID</b></td>
                        <td>
                       : <?php echo $_SESSION["id"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td> <b>Department</b></td>
                        <td>
                       : <?php echo $_SESSION["dept"] ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align = "end"    >
                            <a href="logout.php">logout</a>
                        </td>
                    </tr>
                </table>    
            </body>
    </html>

<?php
}
else{
    header("location:login.html");
}
?>
