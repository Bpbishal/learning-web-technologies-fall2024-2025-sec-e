<?php 

    if(isset($_POST['submit'])){
        $email = $_POST['email'];

        if($email == null){
            echo "Null emailaddress";
        }

    
    }else{
        echo "invalid request!";
        // header('location: name.html');
    }


?>