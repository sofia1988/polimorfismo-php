<?php

namespace Dgutman\UnitTest;

abstract class Character
{
    protected $name;
    protected $hp = 100;
    protected $attackPower = 10;

    /**
     * @var Weapon $weapon
     */
    protected $weapon;

    public function __construct($name)
    {
        $this->name = $name;
        $this->weapon = new NoWeapon();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @param int $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * @return int
     */
    public function getAttackPower()
    {
        return $this->attackPower;
    }

    /**
     * @param int $attackPower
     */
    public function setAttackPower($attackPower)
    {
        $this->attackPower = $attackPower;
    }

    public function saludar()
    {
        return "Hola, mi nombre es {$this->name}";
    }

    public function attack(Character $character)
    {
        $damage = $this->weapon->getPowerAttack();
        $character->receiveDamage($damage);
    }

    public function receiveDamage($damage)
    {
        if (($this->getHp() - $damage) <= 0) {
            throw new \Exception("{$this->getName()} esta muerto");
        }

        $this->setHp($this->getHp() - $damage);
    }

    public function equipWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }
}