<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 4/28/15
 * Time: 6:12 AM
 */

require 'Singleton.class.php';
require 'Factory.class.php';

// This is the first instance created
$instance1 = Factory::getSingletonInstance("test1");

// These refer to the previously created instance only
$instance2 = Factory::getSingletonInstance("test2");
$instance3 = Factory::getSingletonInstance("test3");
$instance4 = Factory::getSingletonInstance("test4");

var_dump($instance1);
print_r($instance2);
print_r($instance3);
print_r($instance4);

// Creating new instance will result in exception
//$singleton = new Singleton("s1");