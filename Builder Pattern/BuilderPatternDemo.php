<?php

require_once 'PizzaChef.class.php';
require_once 'HotSpicyPizzaBuilder.class.php';
require_once 'MediumSpicyPizzaBuilder.class.php';
require_once 'NonSpicyPizzaBuilder.class.php';


$pizzaChef = new PizzaChef();

$pizzaBuilder = new HotSpicyPizzaBuilder();
$pizzaBuilder->createNewPizza();

$pizzaChef->setPizzaBuilder ($pizzaBuilder);
$pizzaChef->preparePizza();
$pizzaChef->serve();

$pizzaBuilder = new MediumSpicyPizzaBuilder();
$pizzaBuilder->createNewPizza();

$pizzaChef->setPizzaBuilder ($pizzaBuilder);
$pizzaChef->preparePizza();
$pizzaChef->serve();

$pizzaBuilder = new NonSpicyPizzaBuilder();
$pizzaBuilder->createNewPizza();

$pizzaChef->setPizzaBuilder ($pizzaBuilder);
$pizzaChef->preparePizza();
$pizzaChef->serve();