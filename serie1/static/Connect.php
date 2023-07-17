<?php


class Connect{

    // imaginons ici une classe Connect pour se connecter a une base de données. On est d'accord que il n'y a aucune "varieté" dans la connexion a notre base de données. Cette a dire que une instance ne va pas se connecter differement que une autre. Encore une fois, dans ce cas de figure, c'est une bonne idée d'utiliser une methode statique
  
    public static function connectToDB(){
        $host="localhost";
        // ma base de données
        $dbname="example_1";
        // mon utilisateur (par defaut root)
        $username="root";
        // mon mot de passe (j'en precise pas). Plus tard, nous allons voir comment securiser notre mot de passe avec les variables d'environment
        $password="";
       
        $dbConnector=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $dbConnector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnector;
    }
}


?>