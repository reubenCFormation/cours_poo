<?php
namespace model;

class Connect{
    // ici je vais ecrire une fonction pour me connecter a une base de données et je vais preciser le nom de ma base de données lors que je fais appel a connect et que je transmets l'argument!
    public static function connect(){
        $host="localhost";
        // ma base de données
        $dbname="my_animals";
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


