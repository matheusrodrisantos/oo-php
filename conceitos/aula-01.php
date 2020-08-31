<?php 

class Car
{
    public $color;
    public $year;

    public function run()
    {
        return 'Car is running';
    }
    public function stop()
    {

    }
}

$car = new Car();
$car->color='White';
$car->year='2020';
print $car->run();
echo"\n";

$car2 = new Car();
$car2->color='White';
$car2->year='1998';
print_r($car2);