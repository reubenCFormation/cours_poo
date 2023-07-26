<?php
class Person{
    // ici je defini trois proprietés differentes, name,age et sex. Au debut, je ne leur donne aucune valuer mais je leur force tout de meme a avoir un type a respecter.
  public string $name;
  public int $age;
  public string $sex;
    // __construct est conne comme etant une methode magique!. Une methode magique est plus au moins une methode pre defini dans php que nous n'avons pas besoin d'ecrire. chaque fonction qui commencera avec __ est une methode magique. Dans le cas de __construct, elle sera automatiquement appelé lors que nous allons creer une instance de la classe MyPerson! On verra plus en detail plus bas comment ca fonctionne!
  public function __construct($name,$age,$sex){
    //echo "Nous sommes en train de faire appel au constructeur. Ceci va se declencher lors que nous instancier cette classe et ainsi nous allons creer un objet!";
    $this->name=$name;
    $this->age=$age;
    $this->sex=$sex;

  }
 


  
}

// ici remarquer les trois arguments lors que j'instancie ma classe. Ces trois arguments correponderont aux trois parametres que j'ai defini dans mon constructuer (public function __construct) plus haut. Ainsi, lors que je vais instancier ma classe Person, je vais en meme temps definir des valeurs par defaut pour cette objet qui sera une instance de la classe Person. Ce sont en quelque sorte des valeurs par defaut.

$newPerson=new Person("Reuben",33,"male");





// J'ai eu mon anniversaire il y a un jour. J'ai donc changé d'age, et j'ai 10 ans de moins et je ne suis plus chauve! Je vais donc devoir mettre a jour mon age 

/*
$person1->age=22;
echo "Mon age apres avoir rajeuni de 10 ans! <br/>";
echo $person1->age;
*/





?>