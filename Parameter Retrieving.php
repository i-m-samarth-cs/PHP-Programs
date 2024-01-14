<?php
  function demo()
  {
    $num=func_num_args();
    echo "No of Args:".$num;
    print_r(func_get_args());

    if($num==0)
    {
        echo "No Parameter";
    }
    for($i=0;$i<$num;$i++)
    {
        echo "Args is $i:".func_get_args($i);
    }
    
  }
  demo(1,2,3,4);
?>