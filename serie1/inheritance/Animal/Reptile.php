<?php
require_once("./Animal.php");
class Reptile extends Animal{
    protected string $type;
    protected string $species;
    // je fais appel au parent
    public function __construct($species,$name,$legs,$weight){
        // je defini que le $type de cette

        // ici l'enfant va definir $species et $type et via l'heritage il pourra modifier/definir les valeurs sans devoir les redeclarer etant donnée que il y herite!
        $this->setType("Reptile");
        // logiquement un espece va decouler d'un $type (Mammal ou Reptile, il serai donc aussi pertinent de definir $species ici)
        $this->species=$species;

      
        parent::__construct($name,$legs,$weight);

       

    }

    public  function getType(){
        return $this->type;
    }

    public function setType($type){
        if($type!="Reptile"){
            throw new Exception("Vous deviez preciser le type Reptile");
        }

        else{
            $this->type=$type;
        }
    }

    public function getSpecies(){
        return $this->species;
    }

  
 


   
 
}

$turtie=new Reptile("turtle","Turtie",4,80);
// etant donnée que 
echo $turtie->describeAnimal();





?>