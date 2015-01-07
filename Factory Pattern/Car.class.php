<?php

abstract class Car
{
    protected $type;

    protected $topSpeed;

    public function setType ($type) {
        $this->type = $type;
    }

    public function setTopSpeed ($topSpeed) {
        $this->topSpeed = $topSpeed;
    }

    public function drive () {
        echo "\nHey ya !! I am driving a ", $this->type, " car at ", $this->topSpeed;
    }
}