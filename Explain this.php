<?php
  class Student{
    public $rno,$na,$ma;
    public function set_data($roll,$name,$marks)
    {
        $this->rno=$roll;
        $this->na=$name;
        $this->ma=$marks;
    }
    public function display()
    {
        echo "Roll No:".$this->rno;
        echo "<br>";
        echo "Name:".$this->na;
        echo "<br>";
        echo "Marks:".$this->ma;
    }
  }
  $s1= new Student();
  $s1->set_data(328,"SAM",90.44);
  $s1->display();
?>