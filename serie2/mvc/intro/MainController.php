<?php
class MainController{
    public function helloPage(){
        echo "<h4> Bienvenue, vous etes sur la page hello, ceci veux dire que la fonction s'est bien declenché!! </h4>";
        
    }

    public function showRandomInt($number){
       
        echo "<h4> Bienvenue de nouveaux, le parametre que nous avons passé correspond a"." ".$number." </h4>";
        
        
    }

    public function homePage(){
        echo "<h4> Bienvenue, vous etes sur la page d'accueil! </h4>";
    }

    public function redirect(){
        header("location:".dirname($_SERVER["SCRIPT_NAME"]));
    }
}


?>