<?php

class Pizza
{
    private $name;

    private $dough;

    private $cheese;

    private $topping;

    private $sauce;

    private $extraSpices;

    /**
     * @param mixed $cheese
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $cheese
     */
    public function setCheese($cheese)
    {
        $this->cheese = $cheese;
    }

    /**
     * @param mixed $dough
     */
    public function setDough($dough)
    {
        $this->dough = $dough;
    }

    /**
     * @param mixed $sauce
     */
    public function setSauce($sauce)
    {
        $this->sauce = $sauce;
    }

    /**
     * @param mixed $topping
     */
    public function setTopping($topping)
    {
        $this->topping = $topping;
    }

    /**
     * @param mixed $topping
     */
    public function setExtraSpices($extraSpices)
    {
        $this->extraSpices = $extraSpices;
    }

    public function serve () {
        echo "\nServing your ", $this->name, " pizza:";
        echo "\n\tMade from ", $this->dough, " base";
        echo "\n\tWith ", $this->cheese, " cheese";
        echo "\n\tTopped with ", $this->topping;
        if (isset ($this->sauce)) {
            echo "\n\t", $this->sauce, " sauce";
        }
        if (isset($this->extraSpices)) {
            echo "\n\tAnd extra spices of ", $this->extraSpices;
        }

        echo "\nEnjoy your pizza !!\n\n";
    }
}