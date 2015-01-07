<?php

require_once 'PizzaBuilder.class.php';

class NonSpicyPizzaBuilder extends PizzaBuilder
{
    public function setName () {
        $this->pizza->setName("Non spicy pizza");
    }

    public function setDough () {
        $this->pizza->setDough("Soft Dough");
    }

    public function setCheese () {
        $this->pizza->setCheese ("Plain Cheese");
    }

    public function setTopping () {
        $this->pizza->setTopping ("Fresh Vegetables");
    }

    public function preparePizza () {
        $this->setName();
        $this->setDough();
        $this->setCheese();
        $this->setTopping();
    }
}