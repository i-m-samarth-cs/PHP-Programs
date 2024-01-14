<?php
 abstract class Animal
 {
    public $name,$color;
    public function Describe()
    {
        return "Name is ".$this->name."and Color is:".$this->color."<br>";
    }
    abstract public function Greet();
 }
 class Dog extends Animal
 {
    public function Greet()
    {
        return "Welcome to Home";
    }
    public function Describe()
    {
        return parent::Describe()."and it is Dog <br>";
    }
 }
 $animal=new Dog();
 $animal->name="Moti ";
 $animal->color="White ";
 echo $animal->Describe();
 echo $animal->Greet();
?>
