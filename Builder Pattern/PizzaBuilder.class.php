<?php

require_once 'Pizza.class.php';

abstract class PizzaBuilder
{

    protected $pizza;

    public function getPizza () {
        return $this->pizza;
    }

    public function createNewPizza () {
        $this->pizza = new Pizza ();
    }

    public abstract function setDough ();

    public abstract function setCheese ();

    public abstract function setTopping ();
}