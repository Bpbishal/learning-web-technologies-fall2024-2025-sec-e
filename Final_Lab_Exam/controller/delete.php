<?php
require_once('../model/usermodel.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    if (deleteAuth($id)) {
        header("Location: ../view/authlist.php");
        exit;
    } else {
        echo "Error: Could not delete user.";
    }
} else {
    echo "Error: No user ID provided.";
}
?>
