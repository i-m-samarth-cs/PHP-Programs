<?php
  $conn=mysqli_connect("localhost","root","Samarth123@","hello");
  if(mysqli_connect_errno())
  {
    echo "Failed to Connect MYSql:".mysqli_connect_error();
  }
  $sql="SELECT rollno,name,percent FROm student";
  if($result=mysqli_query($conn,$sql))
  {
    while($row=mysqli_fetch_row($result))
    {
        printf("%s %s %s  <br>",$row[0],$row[1],$row[2]);
    }
    mysqli_free_result($result);
  }
  mysqli_close($conn);
?>