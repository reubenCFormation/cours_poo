<?php
namespace model;
use model\Connect;
class Mammal extends Animal{
   protected string $type;
   protected string $species;
 
    
    public function __construct($species,$name,$legs,$weight,$userId,$id=null){
        // ici l'enfant va definir $species et $type et via l'heritage il y aura access et pourra modifier/definir les valeurs sans devoir les redeclarer etant donnée que il y hérite
        
        $this->setType("Mammal");
        // logiquement un espece va decouler d'un $type (Mammal ou Reptile, il serai donc aussi pertinent de definir $species ici)
        $this->species=$species;
        
        if($id){
            $this->id=$id;
        }
        
        // je fais appel au constructeur du parent en passant les parametres
        parent::__construct($name,$legs,$weight,$userId);

        if($this->weight>200 || $this->legs>4){
            $this->isDomestic=false;
        }

        else{
            $this->isDomestic=true;
        }

       

       
    }
    // ici etant donnée que nous allons definir notre proprieté $type dans l'enfant, je vais logiquement mettre mon setter pour la proprieté $type dans l'enfant. Etant donnée que 

    public function setType($type){
        if($type!="Mammal"){
            throw new \Exception("Vous deviez preciser le type Mammal");
        }

        else{
            $this->type=$type;
        }
    }

    public  function getType(){
        return $this->type;
    }

    public function getSpecies(){
        return $this->species;
    }

    public function findAllMammals(){
        try{
            $dbConnector=Connect::connect();
            $sql="SELECT * FROM animals WHERE type=?";
            $statement=$dbConnector->prepare($sql);
            $statement->execute(["Mammal"]);
            $mammals=$statement->fetchAll(\PDO::FETCH_ASSOC);
            $mammalsObjArr=[];
            foreach($mammals as $mammal){
                $getAssociatedUser=User::findById($mammal["user_id"]);
                $newMammal=new Mammal($mammal["species"],$mammal["name"],$mammal["legs"],$mammal["weight"],$mammal["user_id"],$mammal["id"]);
                $newMammal->setUser($getAssociatedUser);
                $mammalsObjArr[]=$newMammal;
               
            }

            return $mammalsObjArr;
        }

        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

  

   

  

    

    
  
    
 
}









?>