<?php 

class Car
{
    public $color;
    public $year;

    public function __construct($color,$year)
    {
        print 'This is name my class: '.__CLASS__;
        $this->color=$color;
        $this->year=$year;
    }

    public function run()
    {
        return 'Car is running';
    }
    
    public function stop()
    {

    }

    public function __destruct()
    {
        print 'Removing object '.__CLASS__;
        print "\n";
    }
}

$car = new Car('White','1996');


echo"\n";
print_r($car);



