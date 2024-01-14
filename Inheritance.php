<?php
  class Cat
  {
    public $wieght,$maxspeed;
    function eat()
    {
        echo "Eating <br>";
    }
    function sleep()
    {
        echo "Sleeping <br>";
    }
  }
  class Lion extends Cat
  {
    public $mane;
    function roar()
    {
        echo "Roar <br>";
    }
  }
  $obj=new Lion();
  $obj->weight=200
  $obj->eat();
  $obj->roar();
?>