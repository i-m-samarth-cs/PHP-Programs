<?php
 function prime($no)
 {
    if($no==1)
    {
        return 0;
    }
    for($i=2;$i<=no;$i++)
    {
        if($no %i==0)
        {
            return 0;
        }
        return 1;
    }
 
 }
 $flag=prime(13);
 if($flag==1)
 {
    echo "Prime";
 }
 else
 {
    echo "Not Prime";
 }
?>