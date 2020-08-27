<?php 
class Animal
{
    public $classe;

    public function sleep()
    {
        return "I am sleeping";
    }
}
class Dog extends Animal
{
    public $name;
    public function run()
    {
        return "I am runing";
    }
}

class Bird extends Animal
{
    public $name;
    public function sleep()
    {
        return "I am not sleeping";
    }
    public function fly()
    {
        return "I am flying";
    }
}

$dog=new Dog();
$bird=new Bird();
print $dog->sleep();
print"\n-----------\n";
print $bird->sleep();
print"\n-----------\n";
