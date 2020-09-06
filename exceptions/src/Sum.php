<?php 
namespace Omini;
use Omini\Exceptions\MyCustomException;

class Sum
{
    public function doSum($n1,$n2)
    {
        if($n2>$n1)
            //throw new \Exception("Paramentro 2 é maior que o primeiro");
            throw new MyCustomException();
        return $n1+$n2;
    }

}