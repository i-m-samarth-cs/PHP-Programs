<?php
 class Shape
 {
    public $pi=3.14;
    function __call($name,$arg)
    {
        if($name=='area')
          switch(count($arg))
          {
            case 0:return 0;
            case 1:return $this->pi*$arg[0];
            case 2:return $arg[0]*$arg[1];
          }
    }
 }
 $circle=new Shape();
 echo $circle->area(5);
 $rect=new Shape();
 echo "<br>".$rect->area(5,10);
?>