<?php

abstract class shape {
    abstract public function getArea();
}


class circle extends shape {
   public $radius;

    public function __construct($radius2) {
        $this->radius = $radius2;
    }

    
    public function getArea() {
        return PI() * $this->radius * $this->radius;
    }
}



$circle = new circle(5);

echo $circle->getArea(); 




