<?php

require "vendor/autoload.php";

$warrior = new \Dgutman\UnitTest\Warrior("pedro");
$orc = new \Dgutman\UnitTest\Orc("ricardo");

//echo $warrior->saludar() . "\n";
//echo $orc->saludar() . "\n";

try {
    echo "guerrero ataca al orco \n";
    $warrior->attack($orc);
    echo "al orco le quedan {$orc->getHp()} de vida \n";

    echo "orco ataca al guerrero \n";
    $orc->attack($warrior);
    echo "al guerrero le quedan {$warrior->getHp()} de vida \n";

    echo "orco ataca al guerrero \n";
    $orc->attack($warrior);
    echo "al guerrero le quedan {$warrior->getHp()} de vida \n";

    echo "El guerrero pelo un hacha \n";
    $axe = new \Dgutman\UnitTest\Axe();
    $warrior->equipWeapon($axe);
    $warrior->attack($orc);
    echo "al orco le quedan {$orc->getHp()} de vida \n";
} catch (Exception $exception) {
    echo $exception->getMessage() . "\n";
}

