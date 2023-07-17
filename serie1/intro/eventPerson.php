<?php
// avec ce require_once, je vais avoir acces a ma classe Person que j'ai crée precedement!
require_once('./person.php');

class Event{
    public string $category;
    public array $activities;
    public array $participants;
    // ici, comme on a vu, si je veux, je peux mettre une valeur par defaut a une proprieté!. Ici c'est pour dire que lors que je vais instancier la classe Event, par default, $isFull sera mis a false!
    
    public int $limit=3;

    public function __construct($category,$activities=[],$participants=[]){
        $this->category=$category;
        $this->activities=$activities;
        $this->participants=$participants;
    }

    
  
    public function addActivity($activity){
    
        $this->activities[]=$activity;
       
        
    }



    // remarquer le mot clé Person. Ici je suis en train de definir que mon parametre $participant DOIT etre une instance de la classe Person. Sinon ca va me declencher une erreur! Ca veux dire que lors que je vais faire appel a la fonction, l'argument que je vais preciser DOIT etre une instance de la classe Person!
    public function addParticipant(Person $participant){
        if(!$this->isEventFull()){
            $this->participants[]=$participant;
            
        }

        else{
            echo "Evenment complet!";
        }
       
    }

    public function isEventFull(){
       
       $getAmountParticipants=count($this->participants);
       if($getAmountParticipants>=$this->limit){
        
        return true;
       }

       else{
        return false;
       }
    }

    // etant donne que maintenant ma proprieté $participants va consister d'un tableau d'objets venant de la classe participants, je vais pouvoir afficher des informations plus precise par rapport a mes participants d'un evenment
    public function showParticipantInfo(){

        foreach($this->participants as $participant){
            echo "Nom:".$participant->name.'<br/>';
            echo "Age:".$participant->age.'<br/>';
            echo "Sex:".$participant->sex.'<br/>';
            echo '<br/>';
        }
    }

   
}

// ici je vais creer trois personnes differentes!
$person1=new Person("Amandine",30,"female");
$person2=new Person("Alexis",27,"male");
$person3=new Person("Yoda",100,"male");

// ici je vais creer une evenement et je vais lui rajouter des participants!

$newEvent=new Event("Sports");

// je lui rajoute qq activités pour le kiff!

$newEvent->addActivity("Tennis");
$newEvent->addActivity("Surf");

// et maintenant je vais rajouter des participants!

$newEvent->addParticipant($person1);
$newEvent->addParticipant($person2);
$newEvent->addParticipant($person3);

/*
echo '<pre>';
var_dump($newEvent->participants);
echo '</pre>';

echo '<br/>';

$newEvent->showParticipantInfo();

*/


?>