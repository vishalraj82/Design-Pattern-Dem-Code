<?php

require_once 'AbstractProductFactory.class.php';
require_once 'ConcreteProductA2.class.php';
require_once 'ConcreteProductB2.class.php';

class ConcreteProductFactoryB extends AbstractProductFactory
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
		return new ConcreteProductA2 ();
	}

	public function createProductB () {
		return new ConcreteProductB2 ();
	}
}