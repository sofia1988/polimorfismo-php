<?php

namespace Dgutman\UnitTest;

class NoWeapon implements Weapon
{
    private $powerAttack = 5;

    public function getPowerAttack()
    {
        return $this->powerAttack;
    }
}