<?php
  class Person
  {
    public $name,$age;
    function Person($n,$r)
    {
        $this->name=$n;
        $this->age=$r;
    }
    function display()
    {
        echo "<br>".$n."<br>".$r;
    }

  }
  $p=new Person("John","20");
  $p->display();
?>