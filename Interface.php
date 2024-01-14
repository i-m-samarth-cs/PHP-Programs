<?php
 class A
 {
    public function disp1()
    {
        echo "Parent-A <br>";
    }
 }
 interface B
 {
    public function disp2();
 }
 class C extends A implements B 
 {
    function disp2()
    {
        echo "Parent B <br>";
    }
    public function disp3()
    {
        echo "Child C";
    }
 }
 $obj=new C();
 $obj->disp1();
 $obj->disp2();
 $obj->disp3();
?>