<?php

namespace Styde;

abstract class weapon
{
    protected $damage = 0;
    protected $magical = false;


    public function createAttack()
    {
        return new Attack($this->damage, false, $this->getDescriptionKey());
    }

    protected function getDescriptionKey()
    {
        return str_replace('Styde\Weapons\\', '',get_class($this).'Attack');
    }
}
