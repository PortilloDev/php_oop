<?php

namespace Styde;

require '../vendor/autoload.php';



$armor = new Armors\BronzeArmor();
$deadpool = new Soldier('DeadPool');
$ramm = new Archer("Ramm");
//$deadpool->move('el norte');

$ramm->attack($deadpool);

$deadpool->setArmor(new Armors\CursedArmor);

$ramm->attack($deadpool);

$deadpool->attack($ramm);
