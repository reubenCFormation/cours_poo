<?php
/*
 En php, une classe finale est une classe qui ne peux pas etre instancié. L'idée ca serai de ne pas continuer a elaborer sur les variations et cas de figure differentes d'une classe

*/

final class MyFinalClass{
    public function getDescription(){
        echo "I am a final class and no one will be able to inherit from me!";
    }
}

/*
class ErrorClass extends MyFinalClass{
    public static function getError(){
        echo "Nous allons avoir une erreur lors que nous allons faire appel a cette methode!";
    }
}
*/



/*
 De meme nous avons les methodes final. Ce sont des methodes qui ne peuvent pas etre re ecrites par une classe enfante

*/

class ParentClass{
    public function __construct(){
        echo "Constructor from parent class initialized!";
    }
    final public function getFinalMessage(){
        echo "Je suis une methode finale et aucune classe enfant va pouvoir me redefinir!";
    }
}

class ChildClass extends ParentClass{
    /*
    public function getFinalMessage(){
        echo "Ici une erreur va se declencher car je n'ai pas le droit de re-ecrire une methode finale!";
    }
    */
    
}


?>