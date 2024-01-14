<?php
  $conn=mysqli_connect("localhost:3306","root","Samarth123@","hello");
  if(!$conn)
  {
    die("Error on Connection".mysqli_error());
  }
  mysqli_select_db($conn,"hello");
  $res=mysqli_query($conn,"SELECT * FROM tab");
  while($row=mysqli_fetch_array($res))
  {
    echo $row['id']." ".$row['name'];
    echo "<br>";
  }
  mysqli_close($conn);
?>