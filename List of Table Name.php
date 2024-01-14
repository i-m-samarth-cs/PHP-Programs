<?php
  $conn=mysqli_connect("localhost","root","Samarth123@","hello");
  if(!$conn)
  {
    echo "Connection Failure";
  }
  else{
    echo "Connected to Database <br>";
  }
  $sql="SHOW TABLES FROM hello";
  $res=mysqli_query($conn,$sql);
  if(!$res)
  {
    echo "DB Error ,could not List \n";
    echo "MySQL Error-".mysqli_error();
    exit;
  }
  while($row=mysqli_fetch_row($res))
  {
    echo "<br>$row[0] \n";
  }
  mysqli_free_result($res);
?>