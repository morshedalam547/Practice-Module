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
        return Pi() * $this->radius * $this->radius;    //Area=π×radius × radius

    }
}



$circle = new circle(5);

echo $circle->getArea(); 



echo "<br>";


class counter{

    public static $counter = 0;

    public function __construct(){
        self::$counter++;
    }
  public function showCounter(){
      return self::$counter;
  }

}

$c1 = new counter();
$c1 = new counter();
$c1 = new counter();
$c1 = new counter();


echo $c1->showCounter();
