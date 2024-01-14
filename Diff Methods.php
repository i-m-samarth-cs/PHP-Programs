<?php
  class Demo{
   function myclass(){}
   function myfunc(){}
  }
  $my=new Demo();
  $class_methods=get_class_methods('Demo');
  print_r($class_methods);
?>