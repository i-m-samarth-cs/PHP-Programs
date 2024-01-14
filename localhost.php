<?php
  $require_once="Connecting Database 1.php";
  $conn=new mysqli($hn,$un,$pw,$db);

  if($conn->connect_error)
  {
    die($conn->connect_error);
  }
?>