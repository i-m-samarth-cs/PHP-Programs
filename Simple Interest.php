<?php 
 $conn=mysqli_connect("localhost:3306","root","Samarth123@","hello");
 if(!$conn)
 {
   die("Error on Connection".mysqli_error());
 }
 mysqli_select_db("$conn","tab");
 $res=mysqli_fetch_query("SELECT * FROM LOANDETAIL(5)");
 $row=mysqli_fetch_array($res);
 $amt=$row['AMT'];
 $rate=$row['RATE'];
 $years=$row['YEARS'];
 $int=($amt * $rate*$years)/100;

 mysqli_close($conn);
 return  $interest;
 
 print "Simple Interest = Rs:".calulate_Interest();
?>