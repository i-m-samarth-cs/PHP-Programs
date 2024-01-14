<?php
  $conn=mysqli_connect("localhost:3306","root","Samarth123@","hello");
  if(mysqli_connect_errno())
  {
    echo "Failed to Connect:".mysqli_connect_error();
  }
  $sql="SELECT rollno,name,percent FROM student";
  $res=mysqli_query($conn,$sql);

  while($row=mysqli_fetch_object($res))
  {
    echo $row->rollno;
    echo $row->name;
    echo $row->percent;
    echo "<br>";
  }
  mysqli_free_result($rollno);
  mysqli_close($conn);
?>