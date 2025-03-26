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


//static method

class counter{

    public static $counter = 0;

    public static function increment(){  //akhene $this->counter dile error dekhabe karon static
        self::$counter++;
    }
 

}

counter::increment();
counter::increment();
counter::increment();


echo counter::$counter;

echo "<br>";


class utility{

    public static $loggedinUserName;
    public static  function loggedUserName(){
        return "Logged in user";
    }




}