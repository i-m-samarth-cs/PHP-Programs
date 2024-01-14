<?php
 $conn=mysqli_connect("localhost:3306","root","Samarth123@","hello");
 if(!$conn)
 {
    die('Error in connection'.mysqli_error());
 }
 mysqli_select_db($conn,"hello");
 $result=mysqli_query($conn,"Select id,name from tab where id='1'");
 echo mysqli_num_fields($result);
?>