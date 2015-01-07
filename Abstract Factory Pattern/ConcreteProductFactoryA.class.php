<?php

require_once 'AbstractProductFactory.class.php';
require_once 'ConcreteProductA1.class.php';
require_once 'ConcreteProductB1.class.php';

class ConcreteProductFactoryA extends AbstractProductFactory
{
	private static $instance;

	public static function getInstance () {
		if (NULL === self::$instance) {
			$class = __CLASS__;
			self::$instance = new $class();
		}
		return self::$instance;
	}

	public function createProductA () {
		return new ConcreteProductA1 ();
	}

	public function createProductB () {
		return new ConcreteProductB1();
	}
}