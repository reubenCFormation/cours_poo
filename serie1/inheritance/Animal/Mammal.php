<?php
require_once("./Animal.php");
class Mammal extends Animal{
  
    
    public function __construct($species,$name,$legs,$weight){
        // ici l'enfant va definir $species et $type et via l'heritage il y aura access et pourra modifier/definir les valeurs sans devoir les redeclarer etant donnée que il y hérite
        
        $this->setType("Mammal");
        $this->species=$species;
        
        
        // je fais appel au constructeur du parent en passant les parametres
        parent::__construct($name,$legs,$weight);

       

       
    }

    
   // ici je dois surcharger $type. Sinon, $type ne sera que defini dans le parent et l'enfant prendra la derniere valeur defini dans le parent étant donnée que la proprieté est statique, il n'y a que une valeur a un moment donnée. Si je ne redefini pas $type dans l'enfant, par defaut il prendra la derniere valeur de $type dans le parent meme si la derniere valeur aurai éetait Reptile par exemple.
   


    /*
    Ici comme nous pouvons le constater, nous avons access aux proprietés $weight,$name et $legs meme si elles ne son pas defini dans cette classe grace a l'heritage!

    */
  

    
 
}


$dog=new Mammal("Dog","Golden",4,80);
echo $dog->describeAnimal();


echo '<br/>';

$wolf=new Mammal("Hulk","Monster",9,200);
echo $wolf->describeAnimal();

echo '<br/>';
// on peux dire que notre monstre hulk a pu perdre 100 kilos et que maintenant il devindra domestique!

$wolf->setWeight(100);
// etant donné que j'ai access aux methodes du parent, je peux en utiliser une ici!
$wolf->setIsDomestic(true);

// constatons que notre loup est devenu domestiqué!

echo $wolf->describeAnimal();







?>