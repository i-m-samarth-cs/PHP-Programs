<html>
    <title>FORMS</title>
    <body>
        <form method="GET" action="#">
            Enter City:<input type="text" name="city"><br>
            Enter Area:<input type="text" name="area"><br>
            Enter Population:<input type="text" name="txtpop"><br>
            <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
 $conn=mysqli_connect("localhost:3306","root","Samarth123@");
 if(!$conn)
 {
    echo "Error in Connection";
    exit(0);
 }
 mysqli_query($conn,"CREATE DATABASE country");
 mysqli_select_db($conn,$country);
 mysqli_query("CREATE TABLE city(name varchar(20),area varchar(20),population int");

 $c=$_GET['city'];
 $a=$_GET['area'];
 $p=$_GET['txtpop'];

 mysqli_query("INSERT into city(name,area,population) VALUES('$c','$a','$p')");
 $res=mysqli_query("SELECT * FROM city");

 echo "<table border='1'>";
 echo "<tr><tr>City Name </tr><tr> Area </tr><tr>Population</tr></tr>";
 while($row=mysqli_fetch_row($res))
 {
    echo "<tr> <td>".$row['area']."</td></tr>";
 }
 echo "</table><br>";
 mysqli_close($conn);
?>