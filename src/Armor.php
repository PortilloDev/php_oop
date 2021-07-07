<?php

namespace Styde;


abstract class Armor
{
    public function absorbDamage(Attack $attack)
    {
        if($attack->isPhysical) {
            return $this->absorbMagicDamage($attack);
        }
        return $this->absorbPhysicalDamage($attack);
    }

    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }

    public function absorbMagicDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
       
}
