<?php 
declare(strict_types=1);
class Product
{
    private $name;
    private $price;

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setName(string $name)
    {
        $this->name=$name;
    }

    public function setPrice(float $price)
    {
        $this->price=$price;
    }
}

$p=new Product();
$p->setPrice(18);
$p->setName("true");
print $p->getPrice();
print "\n";