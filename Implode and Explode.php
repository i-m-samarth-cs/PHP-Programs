<?php
  $arr=array("Phoenic","Infotech","Computer","Institute");
  echo implode(" ",$arr)."<br>";
  echo implode("|",$arr)."<br>";

  $arr1='one|two|three|four';
  $str=explode("|",$arr1);
  print_r($str)."<br>";

  $str=explode("|",$arr1,2);
  print_r($str)."<br>";
?>