<?php
  class A
  {
    function show()
    {
        echo "Inside Parent Class <br>";
    }
  }
  class B extends A
  {
    function show()
    {
        echo "Inside Child Class <br>";
    }
  }
  $obj1=new A();
  $obj1->show();
  $obj2=new B();
  $obj2->show();
?>