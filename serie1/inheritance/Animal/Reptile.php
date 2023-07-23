<?php
require_once("./Animal.php");
class Reptile extends Animal{
  
    // je fais appel au parent
    public function __construct($species,$name,$legs,$weight){
        // je defini que le $type de cette

        // ici l'enfant va definir $species et $type et via l'heritage il pourra modifier/definir les valeurs sans devoir les redeclarer etant donnée que il y herite!
        $this->setType("Reptile");
        $this->species=$species;
        
        parent::__construct($name,$legs,$weight);

       

    }

   
 


  
}

$turtie=new Reptile("Turtle","Turtie",4,80);
// etant donnée que 
echo $turtie->describeAnimal();



?>