<?php
  $conn=mysqli_connect("localhost:3306","root","Samarth123@");
  if(!$conn)
  {
    die("Error in Connection".mysqli_error());
  }
  mysqli_select_db($conn,"hello");
  $sql="UPDATE tab SET name='RAM' WHERE id=1";
  mysqli_query($conn,$sql);
  mysqli_close($conn);
?>