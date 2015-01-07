<?php

require_once 'ConcreteProductFactoryA.class.php';
require_once 'ConcreteProductFactoryB.class.php';

class FactoryCreator
{
	public static function getFactory ($factoryType) {
		if ("A" == $factoryType) {
			return ConcreteProductFactoryA::getInstance();
		} else if ("B" == $factoryType) {
			return ConcreteProductFactoryB::getInstance();
		}
	}
}