<?php 

use Omini\Sum;
require __DIR__.'/vendor/autoload.php';

try
{
    $sum = new Sum();
    print $sum->doSum(10);
}
catch(\Error $e)
{
    print $e->getMessage();
}



