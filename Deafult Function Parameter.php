<?php
  function cal($cal,$bonus=3000)
  {
    $total=$cal+$bonus;
    echo "Total Amount:".$total;
  }
  cal(10000);
  cal(10000,2000);
?>