<?php

require_once 'AbstractProductB.class.php';

class ConcreteProductB2 extends AbstractProductB
{
	public function functionB () {
        echo __CLASS__ . ' :: ' . __FUNCTION__ . "\n";
	}
}