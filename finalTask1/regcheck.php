<?php
session_start();
require_once('usermodel.php');
if(isset($_POST["signup"])) {
    $userid = trim($_POST['userid']);
    $name = trim($_POST['name']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    // if(isset($_POST['user']))
    //         {
    //             $user_type=$_POST['user'];
    //         }

    if (empty($userid) || empty($name) || empty($password) || empty($confirm_password) ) {
        echo "All fields are required.";
        exit;
    }

    elseif ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }
    else{
            
        $status = addUser($name, $password,$id, $email);
        if($status){
            header('location: ../view/login.html');
        } else{
            header('location: ../view/signup.html');
        }
    }

}else{
    header('location: ../view/registration.html');


   
}
?>
