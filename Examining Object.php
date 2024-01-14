<?php
  class demo
  {
    private $a=1,$b=2,$c=3,$d=4;
    public function test()
    {
        var_dump(get_object_vars($this));
    }
  }
  $d=new demo();
  print_r(get_object_vars($d));
  $d->test();
?>
