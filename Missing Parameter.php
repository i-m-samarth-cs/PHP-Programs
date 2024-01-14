<?php
 function demo($x,$y)
 {
    if(isset($x))
    {
        echo "X is Set";
    }
    if(isset($y))
    {
        echo "Y is Set";
    }
    
 }
 demo(11,12);
demo(11);
?>