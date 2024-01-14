<?php
  class Employee
  {
    public $empno,$name,$phone,$sal;
    function accept($empno,$name,$phone,$sal)
    {
       $this->empno=$empno;
       $this->name=$name;
       $this->phone=$phone;
       $this->sal=$sal;
    }
    function display()
    {
        echo "NO:".$this->empno."<br>";
        echo "Name:".$this->name."<br>";
        echo "Salary:".$this->sal."<br>";
        echo "Phone:".$this->phone."<br>";
    }
  }
  $c=new Employee();
  $c->accept(128,"SAM",8767950663,1000000);
  $c->display();
?>