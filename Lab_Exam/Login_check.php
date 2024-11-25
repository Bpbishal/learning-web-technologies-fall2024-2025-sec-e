<?php
session_start();
if(isset($_POST['submit'])){
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if(empty($username) || empty($password)){
        echo "<h3>Username or Password is emtpy</h3>";
    }
    else if($_SESSION["username"] === $username && $_SESSION["password"] === $password){
        $_SESSION['status'] = true;
        header("location:home.php");
    }
    else{
        echo "<h3>Invalid Username and Password</h3>";
    }

}
else{
    header("location:login.html");
}

?>