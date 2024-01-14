<html>
    <body>
<?php
  $arr=array("Comp","Electrical","Civil");
  //1
  $arr1=array_slice($arr,1,2);
  print_r($arr1)."<br>";

  //2
  $arr2=array("Civil","Auto");
  $arr3=array_merge($arr,$arr2);
  print_r($arr3)."<br>";

  //3
  print_r(array_chunk($arr,2))."<br>";

  //4
  $a=array("name"=>"Ravi","Salary"=>5000,"designation"=>"Manager");
  print_r(array_keys($arr))."<br>";

  //5
  $b=array_key_exists("name",$a);
  print($b)."<br>";

  //6
  $c=array_values($a);
  print_r($c)."<br>";

  //7
  $d=in_array("Comp",$arr);
  print($d)."<br>";

 // $echo search("Civil",$arr);
?>
</body>
</html>