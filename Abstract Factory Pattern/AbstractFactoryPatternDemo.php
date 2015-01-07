<?php

require_once 'FactoryCreator.class.php';

$factoryA = FactoryCreator::getFactory ("A");

$productA1 = $factoryA->createProductA ();

$productA1->functionA ();

$productB1 = $factoryA->createProductB ();

$productB1->functionB ();

$factoryB = FactoryCreator::getFactory ("B");

$productA2 = $factoryB->createProductA ();

$productA2->functionA ();

$productB2 = $factoryB->createProductB ();

$productB2->functionB ();