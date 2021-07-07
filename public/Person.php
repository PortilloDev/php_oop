<?php 

namespace Styde;

class Person 
{
    protected $name;

    public function __construct($name)
    {
       $this->name = $name;            
    }

    public function name()
    {
        return $this->name;
    }
}


$ivan = new Person('Iván');

$alicia = new Person('Alicia');

echo "<p>{$ivan->name()}</p>";
echo "<p>{$alicia->name()}</p>";