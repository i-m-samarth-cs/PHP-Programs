<?php
  class GrandParent
  {
    function dis1()
    {
        echo "Grand-Parent";
    }
  }
  class Parent extends GrandParent
  {
    function dis2()
    {
        echo "Parent <br>"
    }
  }
  class Child extends PharException{
    function dis3(){
        echo "Chid";
    }
  }
  $obj=new Child();
  $obj->dis1();
  $obj->dis2();
?>