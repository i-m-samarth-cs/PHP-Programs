<?php
class Demo
{
    private $a,$b;
    public function Rollno($r,$s)
    {
        $this->a=$r;
        $this->b=$s;
    }
    public function getRollno()
    {
        echo $this->a."<br>".$this->b;
    }
}
$s1=new Demo();
$s1->Rollno(120,121);
$s1->getRollno();
?>