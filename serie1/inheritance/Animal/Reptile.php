<?php
require_once("./Animal.php");
class Reptile extends Animal{
    //protected static string $type="Reptile";

    public function __construct($species,$name,$legs,$weight){
        $this->setType("Reptile");
        $this->species=$species;
        
        parent::__construct($name,$legs,$weight);

       

    }

  
}

$turtie=new Reptile("Turtle","Turtie",4,80);
echo $turtie->describeAnimal();



?>