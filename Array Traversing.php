<html>
    <body>
        <?php
        $arr =array("Hello","PHP","Welcome");
        //1 
        $val1=current($arr);
        print("Current Value:$val1"."<br>");

        //2
        $val2=next($arr);
        print("Next Value: $val2"."<br>");

        //3
        foreach($arr as $val3)
          echo "$val3" ."<br>";

        //4
        for($i=0;$i<count($arr);$i++)
          echo $arr[$i]."<br>";
    ?>
    </body>
</html>