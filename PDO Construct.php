<?php
  $servername="localhost:3306";
  $username="root";
  $password="Samarth123@";
  try{
    $conn=new PDO("mysql:host=$servername ,dbname=calculator",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Connected Successfully";
  }
  catch(PDOException $e)
  {
    echo "Connection Failed:".$e->getMessage();
  }
?>