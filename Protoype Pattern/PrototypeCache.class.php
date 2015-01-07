<?php

require_once 'ConcretePrototypeA.class.php';
require_once 'ConcretePrototypeB.class.php';

class PrototypeCache
{
    private $objectCache;

    public function loadObjectCache () {
        $this->objectCache = array();

        $this->objectCache['typeA'] = new ConcretePrototypeA();
        $this->objectCache['typeB'] = new ConcretePrototypeB();
    }

    public function getObject ($objectId, $name) {
        $clone = clone $this->objectCache[$objectId];
        $clone->setName($name);

        return $clone;
    }
}