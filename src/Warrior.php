<?php

namespace Dgutman\UnitTest;

class Warrior extends Character
{
    public function saludar()
    {
        return "Hola, mi nombre es {$this->name} y soy un guerrero";
    }
}