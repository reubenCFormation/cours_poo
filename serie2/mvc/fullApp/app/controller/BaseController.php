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


    public function redirect($location,$viewVars){
        
        extract($viewVars);
        header("location:".$location);
    }

    // ici je vais ecrire une fonction pour me connecter a une base de données et je vais preciser le nom de ma base de données lors que je fais appel a connect et que je transmets l'argument!
    public static function connect($mydb){
        $host="localhost";
        // ma base de données
        $dbname=$mydb;
        // mon utilisateur (par defaut root)
        $username="root";
        // mon mot de passe (j'en precise pas). Plus tard, nous allons voir comment securiser notre mot de passe avec les variables d'environment
        $password="";
        
        $dbConnector=new \PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $dbConnector->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $dbConnector;
    }
}




?>