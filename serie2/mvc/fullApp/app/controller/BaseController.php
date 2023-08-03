<?php
namespace controller;

class BaseController{
    // ici j'ai une fonction qui sera utilisé pour transmettre des informations a une vue en particulier
    public function render($viewPath,$viewVars=[]){
       

        // la fonction extract va prendre un tableau associatif, sous forme de $key =>$value. Avec la fonction extract,$key prendra la valeur de $value

        extract($viewVars);
         // ici nous allons nous faire un require du fichier qui est contenu dans notre vue. On le fait en dessous de notre instruction extract et donc ainsi $viewVars sera reconnu!
        require_once($viewPath);
        
          
    }


    public function redirect($location){
        
        header("location:".$location);
       
    }

  
}




?>