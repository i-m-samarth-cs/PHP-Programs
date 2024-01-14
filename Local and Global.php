<?php
  $a=5;   //Gloabal Variable
  function test()
  {
    $a=3;  //Local Variable
    echo "A = ".$a;
  }
  test();
  echo "<br>"
  echo "A Outside".$a;
?>