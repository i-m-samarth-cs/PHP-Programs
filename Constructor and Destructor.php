<?php
  class Person{
    private $fname,$lname;
    public function __construct($fname,$lname)
    {
        $this->fname=$fname;
        $this->lname=$lname;
    }
    public function __destruct()
    {
        echo "Destroyed";
    }
    public function display()
    {
        echo "Name is:".$this->fname." ".$this->lname;
    }
  }
  $obj=new Person("SAMARTH","SHENDRE");
  $obj->display();
?>