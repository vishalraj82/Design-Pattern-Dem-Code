<?php

require_once 'PizzaBuilder.class.php';

class MediumSpicyPizzaBuilder extends PizzaBuilder
{
    public function setName () {
        $this->pizza->setName("Medium spicy pizza");
    }

    public function setDough () {
        $this->pizza->setDough("Garlic Dough");
    }

    public function setCheese () {
        $this->pizza->setCheese ("Garlic Cheese");
    }

    public function setTopping () {
        $this->pizza->setTopping ("Fresh Vegetables");
    }

    public function setSauce () {
        $this->pizza->setSauce ("Garlic Sauce");
    }

    public function preparePizza () {
        $this->setName();
        $this->setDough();
        $this->setCheese();
        $this->setTopping();
        $this->setSauce();
    }
}