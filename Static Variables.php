<?php
  function demo()
  {
    static $x=1;
    $y=1;  //Non static variable value will not change again after calling function again while value of static changes
    $x++;
    $y++;
    echo "X= $x <br>";
    echo "Y=$y <br>";
  }
  demo();
  demo();
  demo();
?>