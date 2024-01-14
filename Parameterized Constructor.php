<?php
  class Emp
  {
    function __construct($roll,$name,$age)
    {
        $this->roll = $roll;
        $this->name = $name;
        $this->age=$age;
        echo "Roll -".$roll."<br>"." Name:".$name."<br> Age:".$age;
    }
  }
  $e=new Emp(328,"SAM",18);
?>