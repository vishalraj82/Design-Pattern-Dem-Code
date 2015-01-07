<?php

require_once 'RegularCar.class.php';
require_once 'SportsCar.class.php';

class CarFactory
{
    public static function getRegularCar () {
        return new RegularCar ();
    }

    public static function getSportsCar () {
        return new SportsCar();
    }
}