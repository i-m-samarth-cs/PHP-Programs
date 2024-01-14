<?php
  class Student
  {
    var $rollno;
    var $name;
    function display()
    {
        echo "Roll No:".$this->rollno."<br>";
        echo "Name:".$this->name;
    }
  }
  $s1=new Student();
  $s1->rollno=328;
  $s1->name="Samarth";
  $s1->display();
?>