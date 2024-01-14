<?php
 $var=array("Welcome",328,array(1,'two'),'IT');
 $str=serialize($var);
 print_r($str,"<br>");
 $new=unserialize($str);
 print_r($new);
?>