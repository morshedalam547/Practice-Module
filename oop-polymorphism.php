<?php

class person{


    public $name;
    
    public $age;
    
  
    
    public function getPersonInfo($name,$age){
    

     $this->name = $name;
     $this-> age = $age;
    

    
    }
    
 
    public function showPersonInfo(){
    
        echo "name: $this->name";
        echo "age : $this->age";
    }
    

    
    }
    
    $p1 = new person;
    
    $p1 -> getPersonInfo  ("Morshed","kkk");
    $p1 -> showPersonInfo();
