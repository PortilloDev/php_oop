<?php

namespace Styde;

require '../vendor/autoload.php';


$deadpool = new Unit('DeadPool', new Weapons\BasicSword);

$deadpool->setArmor(new Armors\BronzeArmor());

$ramm = new Unit("Ramm", new Weapons\FireBow());

$ramm->attack($deadpool);

$ramm->attack($deadpool);

$deadpool->attack($ramm);
