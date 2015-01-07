<?php

require_once 'AbstractProductA.class.php';

class ConcreteProductA1 extends AbstractProductA
{
	public function functionA () {
		echo __CLASS__ . ' :: ' . __FUNCTION__ . "\n";
	}
}