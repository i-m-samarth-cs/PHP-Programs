<?php
  $arr1=array(0=>"Sci",1=>"Eng",2=>"Math");
  $arr2=array(0=>"Sci",1=>"Sci2",3=>"Marathi");

  //1
  $diff_res=array_diff($arr1,$arr2);
  print_r($diff_res);
  echo("<br>");

  //2
  echo "Array1 is :".is_array($arr1);
  echo("<br>");

  //3
  shuffle($arr2);
  print_r($arr2);
?>