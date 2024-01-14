<?php
  class A
  {

  }
  class B extends A{
  }
  $s=new B();
  echo "Parent Class Name:".get_parent_class($s);
?>