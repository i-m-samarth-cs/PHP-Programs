<html>
    <body>
    <?php
    //1
    $arr=array('C','C++');
    array_push($arr,'PHP','Java');
    print_r($arr)."<br>";
    echo("<br>");

    //2
    array_pop($arr);
    print_r($arr);
    echo("<br>");

    //3
    array_shift($arr);
    print_r($arr);
    echo("<br>");

    //4
    array_unshift($arr,"CSS",'Python');
    echo("<br>");
?>
</body>
</html>
