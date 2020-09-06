<?php 

use Omini\Sum;

require __DIR__.'/vendor/autoload.php';

try
{
    $sum = new Sum();
    print $sum->doSum(10,20);
}
catch(\Error $e)
{
    var_dump($e);
}
catch(\Exception $e)
{
    print $e->getMessage();
}



