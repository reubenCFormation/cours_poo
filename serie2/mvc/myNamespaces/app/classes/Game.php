<?php
// On va utiliser le chemin complet de notre arborescence pour definir un Namespace;Ici je remonte jusq'au dossier parent qui s'apelle myNamespaces! Remarquer aussi que le noms de nos dossier sont seprare par des "\" et non par des "/" comme ca serai le cas traditionellement
namespace classes;
use models\myModel;

class Game{
    public function sayHello(){
        echo "Bonjour depuis la classe Game dans le namespace classes!! <hr/> <br/>";
        
    }
}




?>