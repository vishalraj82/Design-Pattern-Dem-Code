<?php

require_once 'Car.class.php';

class SportsCar extends Car
{
    public function __construct () {
        $this->setType("Sports");
        $this->setTopSpeed("200MPH");
    }
}