<?php
  $conn=mysqli_connect("localhost:3306","root","Samarth123@");
  if(!$conn)
  {
    die("Error in Connection".mysqli_error());
  }
  //Creating Database
  if(mysqli_query($conn,"CREATE DATABASE hi"))
  {
    print("Database Created");
  }
  else
  {
    print("Error :".mysqli_error());
  }
  mysqli_select_db($conn,"hello");
  $query="CREATE TABLE tab( id INT(4),name VARCHAR(20))";

  mysqli_query($conn,$query);
  mysqli_close($conn);
?>