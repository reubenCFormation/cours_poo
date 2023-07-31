<?php
class MyParent{
 protected string $name;
 protected string $role;
 
 public function __construct($name,$role){
    $this->name=$name;
    $this->role=$role;
 }

 public function sayHello(){
    echo "Bonjour"." ".$this->name." "."dit bonjour depuis le parent!<br/>";
 }

 public function getRole(){
    return $this->role;
 }
 
 
}

class MyChild extends MyParent{
    // ici je peux redefinir mon constructeur dans la classe enfant!

    public function __construct($name,$role){
        echo "L'enfant est en train de s'insancier et non le parent!<br/>";
        // ici ce n'est pas neccesaire, mais si je veux que l'enfant ait access a la logique du constructeur de la classe parente, je peux faire appel aux constructeurs de mon parent en passant des parametres (etant donné que le constructeur du parent a des parametres!)
        parent::__construct($name,$role);
    }

    public function sayHello(){
        
        echo "Bonjour"." ".$this->name." "."dit bonjour depuis l'enfant!<br/>";
    }
}

$newChild=new MyChild("childClass","child");
$newChild->sayHello();

echo "INSTANCE DE LA CLASSE PARENTE! <br/>";
/*
$newParent=new MyParent("parentClass","parent");
$newParent->sayHello();
*/


/*

echo "<h2> Avec l'enfant! </h2>";
// ici nous allons voir que le constructueur du parent et le constructeur de l'enfant ne sont pas identique 
$child1=new MyChild("Sarah","child");
// nous allons voir que le comportement de la fonction sayHello dans l'enfant  n'est pas le meme que dans le parent!
$child1->sayHello();
*/

// Neanmoins,les methodes du parent restera toujours accesible depuis le parent!
/*
echo "<h4> Les methodes du parent restent bien sur toujours accessible dans l'enfant! </h4>";
echo $child1->getRole();
*/





?>