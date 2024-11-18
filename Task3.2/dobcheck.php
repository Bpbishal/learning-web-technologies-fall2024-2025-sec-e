<?php 

    if(isset($_POST['submit'])){
        $dd = $_POST['dd'];
        $mm = $_POST['mm'];
        $yyyy=$_POST['yyyy'];

        if ($dd == Null){
            echo "Null username/password";
        }

    
    }else{
        echo "invalid request!";
       // header('location: name.html');
    }


?>