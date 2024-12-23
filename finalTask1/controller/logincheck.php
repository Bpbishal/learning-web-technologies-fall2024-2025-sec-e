<?php 
    session_start();
    require_once('../model/userModel.php');

    if(isset($_REQUEST['signIn'])){
        $id = trim($_REQUEST['id']);
        $password = trim($_REQUEST['password']);

        if($id == null || empty($password)){
            echo "Null username/password";
        }else{
            
            $status = login($id, $password);
            if($status){
                $_SESSION['status'] = true;
                if($login_status == 'User'){
                header("location:../view/user_home.php?id={$id}");
                }
                else{
                header("location:../view/admin_home.php?id={$id}");
                }
                //setcookie('status', 'true', time()+3600, '/');
                // $_SESSION['username'] = $username;
                // header('location: ../view/home.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        //echo "invalid request!";
        header('location: ../view/login.html');
    }

?>