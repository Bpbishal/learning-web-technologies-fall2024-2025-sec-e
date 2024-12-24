<?php
require_once('../model/usermodel.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    if (deleteUser($id)) {
        header("Location: ../view/userinfo.php");
        exit;
    } else {
        echo "Error: Could not delete user.";
    }
} else {
    echo "Error: No user ID provided.";
}
?>
