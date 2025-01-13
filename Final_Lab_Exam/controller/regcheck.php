<?php
session_start();
require_once('../model/usermodel.php');
if(isset($_POST["signup"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

    if (empty($username) || empty($password) || empty($confirm_password) || empty($email) ) {
        echo "All fields are required.";
        exit;
    }

    elseif ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }
    else{
            
        $status = addUser($username, $password, $email);
        if($status){
            header('location: ../view/login.html');
        } else{
            header('location: ../view/registration.html');
        }
    }

}else{
    header('location: ../view/registration.html');


   
}
?>
