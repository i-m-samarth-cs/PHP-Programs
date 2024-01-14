<?php
 final class A
 {
    public function disp()
    {
        echo "Inside Parent Class";
    }

 }
 class B extends A
 {
    function disp()
    {
        echo "Inside Child Class";
    }
 }
 $obj=new B();
 $obj->disp();

 class Demo
 {
    final public function disp()
    {
        echo "Inside Parent Class";
    }
 }
 class B extends A
 {
    function disp()
    {
        echo "Inside Child Class";
    }
 }
?>