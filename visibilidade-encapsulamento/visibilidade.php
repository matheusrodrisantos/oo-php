<?php 
//public 
//private 
//protected

class Person 
{
    public $name; 
    public $age; 
    protected $height;
    public function __construct()
    {
        $this->name='Matheus';
        $this->age=12;

    }
    public function ShowName()
    {
        return $this->name;
    }
}

class Student extends Person 
{
    public $grades=7;
    
    public function showHeight()
    {
        return $this->height;
    }
}

$p = new Person();
$p->name = 'Matheus Rodrigues';
$p->age=16;

print"\n";
print_r($p);
print"\n";


$s = new Student();
print_r($s);
print"\n";

$s2 = new Student();
$s2->name='Joao Carlos';
print_r($s2);
print"\n";