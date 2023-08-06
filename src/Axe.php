<?php

namespace Dgutman\UnitTest;

class Axe implements Weapon
{
    private $powerAttack = 90;

    public function getPowerAttack()
    {
        return $this->powerAttack;
    }
}