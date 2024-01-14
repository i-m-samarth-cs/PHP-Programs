<html>
    <body>
        <?php
        $name=array("Samarth","Manish","Shendre");
        List($a,$b,$c)=$name;   //Extracting Values
        echo $a."<br>";  
        echo $b."<br>";

        $arr1=compact("a","b","c");   //Combines var to array
        print_r($arr1)."<br>";
        echo "<br>";
        echo count($name)."<br>";  //No of Elements
        unset($name[0]);    //Removes I element but index is allocated

        array_values($name);        //Adjust values
    ?>
</body>
</html>



