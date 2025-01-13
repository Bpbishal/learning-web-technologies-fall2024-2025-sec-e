<?php
session_start();
require_once('../model/usermodel.php');

if (isset($_REQUEST['submit'])) {
    $authName = $_POST['authname'];
    $authUsername = $_POST['authusername'];
    $authPhone = $_POST['authphone'];
    $authPassword = $_POST['authpassword'];

    if (addAuth($authName,  $authPhone, $authUsername, $authPassword)) {
        
        header("Location: ../view/dashboard.php");
        exit();
    } else {
        echo "Failed to add author. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
