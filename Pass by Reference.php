<?php
 function add(&$num1){
  $num1 += 2;
 }
function addSix(&$num1)
{
    $num1+=6;
}
$original=10;
add($original);

addSix($original);
echo("Change=".$original);
?>