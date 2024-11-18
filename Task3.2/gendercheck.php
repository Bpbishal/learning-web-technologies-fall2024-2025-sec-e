<?php 

    if(isset($_POST['submit']))
        {
            if(isset($_POST['gender']))
            {
                $gender=$_POST['gender'];
                if(empty($gender))
                {
                    echo "Null gender";
                }
            else
                echo "Submitted";
            }
        
        }
    else
        {
            echo "Error";
            // header('location: name.html');
        }


?>