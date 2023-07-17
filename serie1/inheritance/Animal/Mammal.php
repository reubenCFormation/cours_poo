<?php
require_once("./Animal.php");
class Mammal extends Animal{
    // ici je redefini la proprieté type pour etant de type Mammifiere
    //protected static string $type="Mammal";

    public function __construct($species,$name,$legs,$weight){
        // je defini l'espece
        
        $this->setType("Mammal");
        $this->species=$species;
        
        
        // je fais appel au constructeur du parent en passant les parametres
        parent::__construct($name,$legs,$weight);

       

       
    }

    
 
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