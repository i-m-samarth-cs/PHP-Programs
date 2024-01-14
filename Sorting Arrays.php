<html>
    <body>
        <?php
        $num=array(40,61,2,22,13);
        sort($num);     //Ascending
        print_r($num)."<br>";

        rsort($num);    //Descending
        print_r($num)."<br>";

        $arr=array("A"=>"S","B"=>"A","C"=>"M");
        asort($arr);  
        print_r($arr)."<br>";      //Sort Ascending using value

        ksort($arr);    //Sort Ascending using key  
        print_r($arr)."<br>";

        arsort($arr);
        print_r($arr)."<br>";  //Descending value and key
        krsort($arr);
        print_r($arr)."<br>";

    ?>


