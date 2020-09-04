<?php 

$classAn=new class{
    public function read(){
        return 'Reading';
    }
};

class Library
{
    public function readBook($book,$class)
    {
        return $class->read().' '.$book;
    }
}
$library=new Library();
print $library->readBook('The Fall of Stars',$classAn);
print "\n";

