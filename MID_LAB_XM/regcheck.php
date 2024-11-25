<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        $username = trim($_REQUEST['username']);
        $email    = trim($_REQUEST['email']);
        $password = trim($_REQUEST['password']);
        $confirm_password = trim($_REQUEST['confirm_password']);
        //$gender   = $_REQUEST['gender'];


        if(isset($_POST['gender']))
            {
                $gender=$_POST['gender'];
                if(empty($gender))
                {
                    echo "Null gender";
                }
            }

        if($username == null || empty($email) || empty($password) || empty($confirm_password)){
            echo "Please fillout every info";
        }elseif($password !== $confirm_password){
            echo "Password and confirm password not matching";
           
        }
        else{
            $a = ['username' => $username, 'password' => $password, 'email'=>$email, 'gender'=>$gender];
            
            array_push ($a,$_SESSION);
            $_SESSION = $a;
            // $_SESSION['status'] = true;
            // $_SESSION['username'] = $username;
            // $_SESSION['email']=$email;
            // $_SESSION['password']=$password;
            // $_SESSION['confirm_password']=$confirm_password;
            header('location: home.php');
        }
    
    }else{
        //echo "invalid request!";
        header('location: registration.html');
    }
