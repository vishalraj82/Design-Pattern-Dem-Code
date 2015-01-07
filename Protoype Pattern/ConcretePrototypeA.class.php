<?php

require_once 'AbstractProtoType.class.php';

class ConcretePrototypeA extends AbstractPrototype
{
    private $name = 'Concrete Prototype A';

    private $attribute1 = 'Attribute 1 data from NoSQL';
    private $attribute2 = 'Attribute 2 data from MySQL';
    private $attribute3 = 'Attribute 3 data from Disk file';


    public function setName ($name) {
        $this->name = $name;
    }

    public function __clone () {
        
    }
}