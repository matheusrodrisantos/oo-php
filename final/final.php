<?php 
/* A palavra reservada Final pode ser usada tanto para classes quanto para metodos
no uso da classe ela não permite que alguma outra classe tente estender dela; e em metodos ela não permite 
que  classes filhas venham o metodo com o mesmo nome
*/

final class User
{
    private $name; 

    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name=$name;
    }
}