<?php

namespace Styde;

abstract class weapon
{
    protected $damage = 0;
    protected $magical = false;
    protected $description = ':unit ataca a :opponent';

    public function createAttack()
    {
        return new Attack($this->damage, false, $this->description);
    }

}
