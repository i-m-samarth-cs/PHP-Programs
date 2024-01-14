<?php
  class Demo
  {
    function __construct()
    {
        echo "Constructor Called"."<br>";
    }
    function __destruct()
    {
        echo "Destructor Called";
    }
  }
  $obj=new Demo();
?>