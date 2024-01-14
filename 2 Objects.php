<?php
  class Rectangle
  {
    public $len=10;
    public $wid=10;
    public function area()
    {
        echo "Length:".$this->len;
        echo "Width:".$this->wid;
        return($this->len * $this->wid);
    }
  }
  $r=new Rectangle();
  $r1=new Rectangle();
  $r1->len=20;
  $r1->wid=30;
  echo "Area=".$r1->area();
  $ar=$r->area();
  echo "Area=".$r->area();
 ?>