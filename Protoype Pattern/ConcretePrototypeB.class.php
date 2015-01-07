<?php

require_once 'AbstractProtoType.class.php';

class ConcretePrototypeB extends AbstractPrototype
{
    private $name = 'Concrete Prototype A';

    public function __clone () {

    }
}