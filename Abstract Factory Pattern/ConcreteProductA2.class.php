<?php

require_once 'AbstractProductA.class.php';

class ConcreteProductA2 extends AbstractProductA
{
	public function functionA () {
        echo __CLASS__ . ' :: ' . __FUNCTION__ . "\n";
	}
}