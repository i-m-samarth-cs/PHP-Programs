<?php
  class Student{
    public $rollno;
    public $name;
    function __construct()
    {
        $this->rollno = 328;
        $this->name = "Samarth";
    }
    public function disp()
    {
        echo "Roll No:".$this->rollno."<br>";
        echo "Name:".$this->name;
    }
  }
  $s1=new Student();
  $s1->disp();
?>