<?php
namespace controller;
use controller\BaseController;
use model\Animal;
use model\Mammal;
use model\Reptile;


class AnimalController extends BaseController{
    public function renderAddAnimal(){
        $this->render('../view/add_animal.php');
    }

    public function addAnimal(){
        if(!empty($_POST)){
            if($_POST["name"] && $_POST["legs"] && $_POST["weight"] && $_POST["type"] && $_POST["species"]){
                $name=$_POST["name"];
                $legs=$_POST["legs"];
                $weight=$_POST["weight"];
                $type=$_POST["type"];
                $species=$_POST["species"];

                $userId=$_SESSION["user"]["id"];

                if($type=="Mammal"){
                    $newMammal=new Mammal($species,$name,$legs,$weight,$userId);
                    if($newMammal->insert()){
                        $this->redirect(dirname($_SERVER["SCRIPT_NAME"]));
                    }
                }

                if($type=="Reptile"){
                    $newReptile=new Reptile($species,$name,$legs,$weight,$userId);
                    if($newReptile->insert()){
                        $this->redirect(dirname($_SERVER["SCRIPT_NAME"]));
                    }

                }


            }

            else{
                $this->render("../view/add_animal.php",["errorMsg"=>"Viuellez remplir tous vos champs"]);
            }
        }

        else{
             $this->render("../view/add_animal.php",["errorMsg"=>"Vieullez remplir votre formulaire"]);
        }
    }

    public function getAllAnimals(){
        $reptilesArr=Reptile::findAllReptiles();
        $mammalsArr=Mammal::findAllMammals();
        $animalsArr=array_merge($reptilesArr,$mammalsArr);
        
        $this->render('../view/see_animals.php',["animals"=>$animalsArr]);
    }
}

?>