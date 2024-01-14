<?php
  class Customer
  {
    private $name,$no;
    public function __construct($name,$no)
    {
        $this->name=$name;
        $this->no=$no;
    }
    public function __sleep()
    {
        echo "Sleep Calling <br>";
        return array('name','no');
    }
    public function __wakeup()
    {
        echo "Wakeup Calling <br>";
    }
  }
  $c=new Customer("Sam",12345);
  $data=serialize($c);
  echo $data."<br>";
  print_r(unserialize($data));
?>