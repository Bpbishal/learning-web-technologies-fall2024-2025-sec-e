<?php 
    if(isset($_POST['submit'])){
        if(isset($_POST['degrees']))
        {
            if(count($_POST['degrees'])>=2)
            {
                echo "Degree selected";
            }
            else
            {
                echo "At least two of them must be selected";
            }
        }
        else
        {
            echo "Nothing selected";
        }
    }
    else{
        echo "Invalid";
    }

?>