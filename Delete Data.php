<?php
  $conn=mysqli_connect("localhost","root","Samarth123@");
  if(!$conn)
  {
    die("Error:".mysqli_error());
  }
  mysqli_select_db($conn,"hello1");
  $sql="DROP DATABASE hello1";
  mysqli_query($conn,$sql);
  mysqli_close($conn);
  echo "Database Deleted";
?>