<?php 
  $conn=mysqli_connect("localhost:3306","root","Samarth123@","hello");
  if(!$conn)
  {
    die("Error on Connection".mysqli_error());
  }
  echo "Connection Successfull <br>";
  mysqli_select_db($conn,"student");
  echo "Connected to Database <br>";

  mysql_query("ALTER TABLE tab add column(Popular varchar(20);");

  echo "Table Altered";
  mysqli_close($conn);
  echo "Connection closed";
?>
