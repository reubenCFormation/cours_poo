<?php
 /*
     Vous avez probablement deja utilisé des classes sans le savoir. Dans le cours precedant sur le php procedurale, nous avons utilisé des objets qui etaient des instances de classes comme PDOException,PDO, et PDOStatement. Maintenant, nous allons creer nos propres classes et les instancier!
 */
/*
 A quoi ressemble une classe?
  1)une classe s'ecrit avec un majascuale par convetion.
  2) une classe a une acolade d'ouverture et une acoldate de fermeture 
  3) une classe est precedé par le mot clé classe
  
  */

  // je vais creer ma premiere classe

  class MyFirstClass{
    // ici j'ai une proprieté. Une proprieté est une valeur que nous pouvons choisir sauf une fonction. Une proprieté peux donc etre un tableau,une chaine de caracteres, une valeur numerique etc. Dans ce cas precis, $name est null car je ne lui ai precisé aucune valeur mais, nous allons voir que par la suite, je vais pouvoir lui preciser des valeurs.

     public $name;
    


     // getInfo() est une methode. Une methode est une fonction qui appartient a une classe tous simplement

     public function getInfo(){
        // remarequer le mot clé $this. Le mot clé $this->name fera reference a la proprieté $name de notre obet. Chaque objet que nous allons creer pourra avoir un $name different et donc $this->name renverra le $name de chacun de nos objets. Plus globalement,$this va nous renvoyer les informations de l'instance particuliere de la classe (qui sera un objet!). J'espere que ca deviendra plus claire plus tard!
        if($this->name){
            echo "Je m'apelle"." ".$this->name.'<br/>';
        }

        else{
            echo "Pas de nom encore defini! <br/>";
        }
        
     }
  }

// ici je vais creer un objet. Cette objet sera une INSTANCE de la classe MyFirstClass et donc cette objet va avoir access aux proprietés et methodes de MyFirstClass. Il pourra utiliser et definir ce que MyFirstClass va lui fournir et MyFirstClass lui fourni une proprieté name ainsi que une methode getInfo!

// pour instancier une classe et creer un objet,on va creer une varaiable et on va lui assigner une nouvelle instance de la classe. $obj1 devient ainsi un Objet qui est une instance de la classe MyFirstClass et qui a donc ainsi access a ses propritétes et methodes


  $obj1=new MyFirstClass();
  // Remarquer le ->. Le -> est la notation pour acceder a une proprieté ou a une methode d'une classe! Ici $obj1->name nous retournera null car nous n'avons defini aucun $name par defaut

  /*
  var_dump($obj1->name);

  echo '<br/>';

  $obj1->getInfo();
  */


  $obj2=new MyFirstClass();

  // ici je peux definir le $name de mon obj2. Notez bien la syntaxe avec la ->.Vous l'avez sans doute deja vu en PHP Prodcedurale. Ici on dit, la proprieté $name de notre instance sera egale a firstInstance. La proprieté $name ne sera donc plus null!
  /*
  $obj2->name="firstInstance!";
 
  // ici on est censé etre retourné la phrase Instance1.
  var_dump($obj2->name);
  echo '<br/>';
  

  // ici on va afficher les informations de notre instance $obj1 on faisant appel a la methode getInfo() de $obj1

  $obj2->getInfo();
  */
 // je vais creer une 2eme instance de MyFirstClass!
  $obj3=new MyFirstClass();
 /*
  $obj3->name="secondInstance!";

  var_dump($obj3->name);

  echo '<br/>';

  $obj3->getInfo();
  */


  

  

?>