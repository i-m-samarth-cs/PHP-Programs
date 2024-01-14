<?php
 function display()
 {
    $all=get_declared_classes();
    foreach($all as $class){
        echo "Show info about $class <br/>";
        echo "$class methods:<br>";
        $methods=get_class_methods($class);

        if(!count($methods))
        {
            echo "No MEthods";
        }
        else{
            foreach($methods as $method){{
                echo "<b> $method </b>";
            }
        }
    }
    }
}
    echo "$class properties:<br>";
    $prop=get_class_vars($class);
 ?>