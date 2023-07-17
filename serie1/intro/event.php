<?php



class Event{
    public string $category;
    public array $activities;
    public array $participants;
    // ici, comme on a vu, si je veux, je peux mettre une valeur par defaut a une proprieté!. Ici c'est pour dire que lors que je vais instancier la classe Event, par default, $isFull sera mis a false!
    
    // ici par defaut, je donne une limit par defaut de 3 a notre evenment
    public int $limit=3;

    public function __construct($category,$activities=[],$participants=[]){
        $this->category=$category;
        $this->activities=$activities;
        $this->participants=$participants;
    }

    
    // vu que ma proprieté $activities sera un tableau, ici je peux ajouter une activité a mon tableau une par une. Nous allons voir que dans des vrais applications, souvent on a pas besoin de faire comme ca.
    public function addActivity($activity){
        // ici je vais juste alimenter mon tableau
        $this->activities[]=$activity;

        
    }
    

    
   

    // je peux utiliser la meme logique avec les participants!

    public function addParticipant($participant){
        // si notre evenment n'est pas complet, je peux continuer a ajouter des participants!
        if(!$this->isEventFull()){
            $this->participants[]=$participant;
       
        }

        else{
            echo "L'evenment est complet!";
        }
        
    }



    public function isEventFull(){
        // ici je vais verifier le nombre de participants a mon evenment. Remarquer encore une fois que fais appel a une methode de ma classe. La methode getParticipants. Encore une fois le mot clé $this correspondera a mon instance lors que je vais en creer une
       $getAmountParticipants=count($this->participants);
       if($getAmountParticipants>=$this->limit){
        
        return true;
       }

       else{
        return false;
       }
    }

   
}
// remarquer ici que dans mon constructeur, la proprieté $participants ainsi que la properieté $activities est vide. Je n'ai donc pas besoin de les definir lors que j'instancie ma classe!

/*
$event1=new Event("Lecture");
$event1->addActivity("Lecture de polars!");
$event1->addActivity("Lecture de romans d'amour!");
/*
echo "VOIR LES ACTIVITES de L'EVENMENT!<br/>";
var_dump($event1->activities);
*/





// ici je vais rajouter trois participants

/*
$event1->addParticipant("Reuben");
$event1->addParticipant("Johnny");
$event1->addParticipant("Toto");
*/


// en faisiant appel a la methode isEventFull, je vais pouvoir savoir si l'evenment est complet ou non!
/*
echo "VOIR LES PARTICIPANTS DE L'EVENMENT! <br/>";

var_dump($event1->participants);
*/




/*

$getIsEventFull=$event1->isEventFull();

var_dump($getIsEventFull);
echo '<br/>';

if($getIsEventFull){
    echo "Notre evenment est complet!";
}
*/




?>