<?php
  class Employee
  {
    var $eno,$ename,$designation,$salary;
    function emp($eno,$ename,$designation,$salary)
    {
        $this->eno=$eno;
        $this->name=$name;
        $this->designation=$designation;
        $this->salary=$salary;
    }
    function display()
    {
        echo("ID:".$this->eno." Name:".$this->ename." Designation:".$this ."And Salary: ".$this->salary);
        echo "<br>";
    }
  }
  $emp=new Employee(1,"SAM","Developer",10000000);
  $emp->display();
?>
