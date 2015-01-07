<?php

require_once 'PrototypeCache.class.php';

$prototypeCache = new PrototypeCache();
$prototypeCache->loadObjectCache();

$objectA1 = $prototypeCache->getObject('typeA', 'A1');
$objectA2 = $prototypeCache->getObject('typeA', 'A2');
$objectA3 = $prototypeCache->getObject('typeA', 'A3');
$objectA4 = $prototypeCache->getObject('typeA', 'A4');
$objectA5 = $prototypeCache->getObject('typeA', 'A5');

print_r($objectA1);
print_r($objectA2);