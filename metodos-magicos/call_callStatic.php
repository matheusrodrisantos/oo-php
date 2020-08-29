<?php
class Produto
{
    public function __call($name,$params)
    {
        print_r($params);
    }
    
    public static function __callStatic($name,$params)
    {
        print_r($name);
    }
}

$prod = new Produto();
$prod->save('ad');
print"\n-------------\n";
Produto::getConnection();
print"\n-------------\n";