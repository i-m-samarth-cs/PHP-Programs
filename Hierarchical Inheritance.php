<?php
 class A
 {
    public function disp()
    {
        echo "Class A"."<br>";
    }
 }
 class B extends A
 {
    public function disp2()
    {
        echo "Class B"."<br>";
    }
 }
 class C extends A
 {
    public function disp3()
    {
        echo "Class C"."<br>";
    }
 }
$obj = new C();
$obj -> disp3();
$obj -> disp();

$obj2 = new B();
$obj2 -> disp2();
$obj2 -> disp();
?>