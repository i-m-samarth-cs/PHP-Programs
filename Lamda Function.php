<?php
$mul=create_function('$p,$q','return $p*$q ;');
$res= $mul(2,3);
echo($res);
$add=create_function('$r,$s','return $r+$s;');
$res=$add(4,9);
echo($res);
?> 