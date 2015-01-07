<?php

class PizzaChef
{
    private $pizzaBuilder;

    public function setPizzaBuilder ($pizzaBuilder) {
        $this->pizzaBuilder = $pizzaBuilder;
    }

    public function preparePizza () {
        $this->pizzaBuilder->preparePizza();
    }

    public function serve () {
        $this->pizzaBuilder->getPizza()->serve ();
    }
}