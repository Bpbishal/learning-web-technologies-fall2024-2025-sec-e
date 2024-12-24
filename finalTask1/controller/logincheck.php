<?php
session_start();
require_once('../model/usermodel.php');

if(isset($_REQUEST['submit'])){
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);

    if($username == null || empty($password)){
        echo "Null username/password";
    }else
    {
        
        $status = login($username, $password);
        if($status){
        $_SESSION['username'] = $username;
        header("Location: ../view/userinfo.php");
        } else {
        echo "Invalid username or password.";
        }
    }
}
else{
    
    header('location: ../view/login.html');
}

?>