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
  $ar=$r->area();
  echo "Area=".$r->area();
 ?>