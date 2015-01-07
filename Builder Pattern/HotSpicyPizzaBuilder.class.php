<?php

require_once 'PizzaBuilder.class.php';

class HotSpicyPizzaBuilder extends PizzaBuilder
{
    public function setName () {
        $this->pizza->setName("Hot spicy pizza");
    }

    public function setDough () {
        $this->pizza->setDough("Spicy Dough");
    }

    public function setCheese () {
        $this->pizza->setCheese ("Pepper n Onion");
    }

    public function setTopping () {
        $this->pizza->setTopping ("Fresh Vegetables and Cottage Cheese");
    }

    public function setSauce () {
        $this->pizza->setSauce ("Hot n Spicy");
    }

    public function setExtraSpices () {
        $this->pizza->setExtraSpices ("Chilli, Garlic and Pepper");
    }

    public function preparePizza () {
        $this->setName();
        $this->setDough();
        $this->setCheese();
        $this->setTopping();
        $this->setSauce();
        $this->setExtraSpices();
    }
}