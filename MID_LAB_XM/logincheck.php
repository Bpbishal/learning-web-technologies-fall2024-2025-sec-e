<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);

        if($username == null || empty($password)){
            echo "Null username/password";
        }
            else if($_SESSION['username'] === $username && $_SESSION["password"] === $password){
                $_SESSION['status'] = true;
                header("location:home.php");
            }
            else{
                echo "invalid request!";
            }
        }
    
    else{
        //echo "invalid request!";
        header('location: login.html');
    }

?>