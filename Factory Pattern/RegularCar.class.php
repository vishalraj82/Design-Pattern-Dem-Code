<?php

require_once 'Car.class.php';

class RegularCar extends Car
{
    public function __construct () {
        $this->setType("Regular");
        $this->setTopSpeed("80MPH");
    }
}