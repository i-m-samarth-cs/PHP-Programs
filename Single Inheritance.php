<?php
  class A
  {
    function dis()
    {
        echo "Hello PHP"."<br>";
    }
  }
  class B extends A
  {
    function dis2()
    {
        echo"PHP Prog";
    }
  }
  $obj=new B();
  $obj->dis();
  $obj->dis2();
?>
