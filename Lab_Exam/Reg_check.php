<?php
session_start();
if(isset($_POST["submit"])){
$username = trim($_POST["username"]);
$email = trim($_POST["email"]);
$id = trim($_POST["id"]);
$dept = trim($_POST["dept"]);
$password = trim($_POST["password"]);
$confirm_password = trim($_POST["confirm_password"]);

if(empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($id) || empty($dept)){
    echo "<h3>Input fields can not be emtpy</h3>";
}
else if( $password !== $confirm_password){
    echo "<h3>Password and Confirm password does not match</h3>";
}
else{
    $a_array = ['username' => $username, 'password' => $password, 'email'=>$email, 'id'=>$id, 'dept'=>$dept];
//    $_SESSION["username"] = $username;
//    $_SESSION["password"] = $password;
//    $_SESSION["email"] = $email;
    $_SESSION = $a_array;
    header("location:login.html");

}

}
else{
    header("location:Registration_page.html");
}


?>