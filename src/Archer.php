<?php

namespace Styde;

class Archer extends Unit{
    protected $damage = 20;
    public function attack(Unit $opponent)
    {
        show("{$this->name} lanza una flecha {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }


}