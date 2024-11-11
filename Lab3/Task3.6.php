<?php
    $array=[5,10,15,20];
    $search=17;
    $flag=false;

    for($i=0; $i<count($array);$i++)
        {
            if($search==$array[$i])
                {
                    print("Element ".$search." is found");
                    $flag=true;
                }
                
        
        }
    if($flag==false)
        {
            print("Element ".$search." is not found");
        }
        
  
?>