<?php
  $conn=mysqli_connect("localhost:3306","root","Samarth123@");
  if(!$conn)
  {
    die("Error in Connection".mysqli_error());
  }
  //Create a Database
  if(mysqli_query($conn,"CREATE DATABASE mydb"))
  {
    print("Database Created");
  }
  else
  {
    print("Error Creating database:".mysqli_error());
  }
  mysqli_close($conn);
?>