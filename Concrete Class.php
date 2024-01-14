<?php
 interface Demo
 {
    public function show();
    public function demo();
 }
 class Simple implements demo{
    public function show(){
        echo "Method 1 Called "."<br>";
    }
    public function demo()
    {
        echo "Method 2 Called"."<br>";
    }
 }
 $obj=new Simple();
 $obj->show();
 $obj->demo();
?>