<?php
// Maintenant que nous avons un peu vu l'heritage, nous pouvons potentiellement decouper notre classe Animal en plusiers partie differente. Dans un premier temps, nous pouvons constater que un Animal aura un nom et un numero de jambes,ainsi que un poids. Cependant, les animaux sont souvent classifier par leur type (phylum) (mammifiere, reptile etc.) Ainsi que par leur especes (Dog,Human etc.) Bien que trés simplifié, nous allons pouvoir voir comment decouper notre logique avec l'heritage!

class Animal{
    protected int $id;
    protected int $legs;
    protected int $weight;
    protected bool $isDomestic;
    protected  string $species;
    protected  string $type;
    protected string $name;
    // dans mon constructeur, je ne vais pas definir l'espece ou le type, ca sera dans ma classe! Je vais tout de meme devoir definir mes proprietés pour que elle soit reconnu dans la classe enfant!
    public function __construct($name,$legs,$weight,$id=null){
        $this->name=$name;
        $this->setWeight($weight);
        $this->setLegs($legs);
      
        if($id){
            $this->id=$id;
        }

        if($this->weight<100 && $this->legs>=2 && $this->legs<=4 ){
            $this->isDomestic=true;
        }
        else{
            $this->isDomestic=false;
        }

       
    }
    // je n'ai pas envie de pouvoir changer le type de mon instance mais j'ai envie de la definir dans mon constructeur. Je vais donc mettre cette fonction en proctected
    protected function setType($type){
        $this->type=$type;
    }

    public  function getType(){
        return $this->type;
    }

    public function setWeight($weight){
        if($weight>500){
            throw new Exception("L'animal ne peux pas peser plus de 300 kg!");
        }
        $this->weight=$weight;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function setLegs($legs){
        if($legs>10){
            throw new Exception("Un animal ne peux pas avoir plus de 10 jambes!");
        }

        $this->legs=$legs;
    }

    public function getLegs(){
        return $this->legs;
    }

    public function getName(){
        return $this->name;
    }


    public function getIsDomestic(){
       return $this->isDomestic;
    }

    public function setIsDomestic($isDomestic){
        $this->isDomestic=$isDomestic;
    }

    public function getSpecies(){
        return $this->species;
    }

    public function getId(){
        return $this->id;
    }

   

    public function describeAnimal(){
        if($this->isDomestic){
            return "Bonjour, je m'apelle"." ".$this->name." "."je pese"." ".$this->weight." "."kilos,je suis un animal du type"." ".$this->type." "."et J'appartiens a l'espece"." ".$this->species." "."J'ai aussi oublier de rajouter que j'ai"." ".$this->legs." "."et je suis domestiqué";
        }

        else{
            return "Bonjour, je m'apelle"." ".$this->name." "."je pese"." ".$this->weight." "."kilos,je suis un animal du type"." ".$this->type." "."et J'appartiens a l'espece"." ".$this->species." "."J'ai aussi oublier de rajouter que j'ai"." ".$this->legs." "."et je suis pas domestiqué!";
        }
        
    }

   
}




?>