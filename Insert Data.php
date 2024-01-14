<?php
  $conn=mysqli_connect("localhost:3306","root","Samarth123@","hello");
  if(!$conn)
  {
    die("Could not connect:".mysqli_connect_error());
  }
  echo "Connected Successfully <br>";
  $sql="INSERT INTO tab (id,name) VALUE(328,'SAM')";

  if(mysqli_query($conn,$sql))
  {
    echo "Record Inserted Successfully";
  }
  else
  {
    echo "Could not Insert Record:".mysqli_error($conn);
  }
  mysqli_close($conn);
?>