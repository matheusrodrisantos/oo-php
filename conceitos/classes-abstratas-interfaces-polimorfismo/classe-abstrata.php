<?php 
//classe abstratas não podem ser instanciadas 
//elas só podem ser acessadas pelos filhos
//metodos abstratas na classe mãe não tem corpo, 
//apenas a assinatura, e quando usadas as classes filhas ficam obrigadas a terem também 

abstract class Animal
{
    private $name;
    public function run()
    {
        return "Animal is runing ...";
    }
    abstract public function sound();
    
}


class Dog extends Animal
{
    public function sound()
    {
        print "au au";
    }
}

$dog=new Dog();
print $dog->run();
print "\n";