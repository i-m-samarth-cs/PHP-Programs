<?php
  $conn=mysqli_connect("localhost:3306","root","Samarth123@");
  if(!$conn)
  {
    echo "Connection Failure";
  }
  else
  {
    echo "Connected to Database <br>";
  }
  $sql="SHOW DATABASES";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_row($res))
  {
    echo "<br> $row[0] \n";
  }
  mysqli_free_result($res);
?>