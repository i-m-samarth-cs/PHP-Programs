<?php
  class A
  {
    public function disp1()
    {
        echo "Parent A <br>";
    }
  }
  trait B           //Parent B
  {
    public function disp2()
    {
        echo "Parent B <br>";
    }
  }
  class C extends A
  {
    use B;
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