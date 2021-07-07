<?php

namespace Styde;

require '../vendor/autoload.php';

Translator::set([
    'BasicBowAttack' => ':unit dispara una flecha :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada :opponent',
    'CrossBowAttack' => ':unit dispara una flecha :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
]);

$deadpool = new Unit('DeadPool', new Weapons\BasicSword);

$deadpool->setArmor(new Armors\BronzeArmor());

$ramm = new Unit("Ramm", new Weapons\FireBow());

$ramm->attack($deadpool);

$ramm->attack($deadpool);

$deadpool->attack($ramm);
