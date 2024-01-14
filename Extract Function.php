<?php
  $arr=array("a"=>"Pune","b"=>"Mumbai","c"=>"Dhule");
  extract($arr);    //converts key and value to variable and value
  echo "\$a".$a."<br>";
  echo "\$b".$b."<br>";
  echo "\$c".$c;
  
?>