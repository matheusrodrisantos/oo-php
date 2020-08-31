<?php
class Produto
{
  public $array=[];

  public function __set($name,$value)
  {
    $this->array[$name]=$value;
  }

  public function __toString()
  {
      return json_encode($this->array);
  }
}

$prod = new Produto();
$prod->name='Testando o string';
$prod->price=19.0;
print $prod;
print"\n";