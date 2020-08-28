<?php 
// interfaces são parecidas com metodos abstratos das classes abstratas
// da mesma maneira eles não tem corpo, eles tem somente a assinatura 
// para usa-los em uma classe deve colocar implements invés de extends
// na classe que será usada torana-se obrigatório a implementação de todos os metodos da interface



interface Animal
{
    public function sound();
    public function run();
}

class Dog implements Animal
{
    public function sound()
    {
        print "au au au";
    }
    public function run()
    {
        print "Ruum";
    }
}

$doguinho = new Dog();
print $doguinho -> sound()."\n";