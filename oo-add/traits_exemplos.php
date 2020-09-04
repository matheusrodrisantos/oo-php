<?php 
trait MyTrait
{
    public function hello()
    {
        return 'Hello';
    }
}

trait MyTrait2
{
    public function hello()
    {
        return 'Hello 2';
    }
    public function showName($name)
    {
        return 'Hello '.$name;
    }
}

class Client
{
    use Mytrait,Mytrait2
    {
        Mytrait2::hello insteadOf Mytrait;
        Mytrait::hello as hello1;        
        Mytrait2::showName as private showNames;
    }

    public function setShowNames($b)
    {
        return $this->showNames($b);        

    }
}

$c=new Client();
print $c->hello1();

print '<br>';
print $c->showName("Matheus");

print '<br>';
print $c->setShowNames('Joaoa');

