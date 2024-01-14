<?php
 class Student
 {
    private $name,$rollno;
    function __construct($name,$rollno)
    {
        $this->name=$name;
        $this->rollno=$rollno;
    }
    function __clone()
    {
        echo "<h3> Copying Object </h3>";
    }
    function display()
    {
        echo "Name :".$this->name;
        echo "Roll no:".$this->rollno;
    }
 }
 $s1=new Student("Samarth",328);
 $s2=new Student("Jadeja",102);
 $s1->display();
 $s2=clone $s1;
 $s2->display();
?>