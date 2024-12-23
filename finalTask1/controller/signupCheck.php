<?php
session_start();
require_once('../model/usermodel.php');
if(isset($_POST["signup"])){

$id = trim($_POST["id"]);
$password = trim($_POST["password"]);
$confirm_password = trim($_POST["confirm_password"]);
$name = trim($_POST["name"]);
$email = trim($_POST['email']);

if(empty($id) || empty($name) || empty($email) || empty($password) || empty($confirm_password) || !isset($_POST['type'])){
    echo "<h3>Input fields can not be emtpy</h3>";
}
else if( $password !== $confirm_password){
    echo "<h3>Password and Confirm password does not match</h3>";
}
else{
    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }
   
    $type = $_POST['type'];

     $addUser = addUser($name, $password, $id, $email, $type);
     if($addUser){
        header("location:../view/login.html");
     }
     else{
        header("location:../view/signup.html");
     }
}

}
else{
    header("location:../view/signup.html");
}

?>