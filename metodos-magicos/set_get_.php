<?php
class Produto
{
    public $props=[];
    public function __set($name,$value)
    {
        $this->props[$name]=$value;
    }

    public function __get($name)
    {
        print $name;
    }
}

$prod = new Produto();
$prod->name="Nome do produto";
$prod->price=19.00;
$prod->ok;

// /var_dump($prod->props);
