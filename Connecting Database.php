<?php
 $host='localhost:3306';
 $user='root';
 $pass='Samarth123@';
 $conn=mysqli_connect($host,$user,$pass);
 if(!$conn)
 {
    die("Could Not Connect:".mysqli-_error());
 }
 echo "Connected Successfully";
 mysqli_close($conn);
?>