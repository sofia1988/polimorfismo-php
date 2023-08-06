<?php

namespace Dgutman\UnitTest;

class Orc extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->setHp(300);
    }

    public function saludar()
    {
        return "Hola, mi nombre es {$this->name} y soy un orco";

    }
}