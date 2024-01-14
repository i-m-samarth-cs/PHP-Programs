<?php
  $conn=mysqli_connect("localhost:3306","root","Samarth123@","mydb");
  if(!$conn)
  {
    die("Error in Connection".mysqli_error());
  }
  mysqli_select_db($conn,"mydb");
  mysqli_close($conn);
?>