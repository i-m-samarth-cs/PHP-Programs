<?php
  class MyClass
  {
    public $public_var="Public Variable";
    protected $provar="Protected Variable";
    private $privar="Private Variable";

    public function printPublic()
    {
        echo $this->public_var."<br>";
    }
    public function printProtected()
    {
        echo $this->provar."<br>";
    }
    public function printPrivate()
    {
        echo $this->privar."<br>";
    }
    public function printAll()
    {
        $this->printPublic();
        $this->printProtected();
        $this->printPrivate();
    }

  }
  $obj=new MyClass();
  $obj->printPublic();
  $obj->printAll();
?>