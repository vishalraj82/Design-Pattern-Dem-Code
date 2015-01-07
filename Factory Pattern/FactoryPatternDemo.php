<?php

require_once 'CarFactory.class.php';

$regularCar = CarFactory::getRegularCar ();

$regularCar->drive ();

$sportsCar = CarFactory::getSportsCar ();

$sportsCar->drive();