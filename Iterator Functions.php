<?php
 $transport=array('foot','bike','car','plane');
 $mode=current($transport);
 echo "Mode:".$mode."<br>";
 $mode=next($transport);
 echo "Mode:".$mode."<br>";
 $mode=prev($transport);
 echo "Mode:".$mode."<br>";
 $mode=end($transport);
 echo "Mode:".$mode."<br>";
 $mode=end($transport);
 echo "Mode:".$mode."<br>";
 $mode=key($transport);
 echo "Mode:".$mode."<br>";
?>