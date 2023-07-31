<?php
/*
    En PHP orienté objet, le principe de l'heritage nous permet de pouvoir creer des classes qui vont heriter d'autres classes. La classe qui herite d'une autre classe aura access a ces methodes et a ses proprietés

*/

// ici je vais creer une classe Parent que je vais appeler Parent

class ParentClass{
    // remarequer ici que nous avons le mot clé protected. Nous l'avons pas vu auparavant. Le mot clé protected designe que une classe enfant y aura access a la proprieté mais elle ne pourra tous de meme PAS etre utilisé directement sur une instance EN DEHORS de la classe.
    protected string $role;
    // cette proprieté étant en privé ne sera pas accessible dans la classe heritante. Il est donc fortement reccomandé, lors que vous voulez y donnez access a vos classes enfants, de mettre le mot protected!
    private $parentOnly="Parent Only";

    
    

    public function __construct($role){
        echo "nous faisons appel au constructeur et j'y donne acces a mes enfants!<br/>";
        $this->role=$role;
       
        
    }



    public function getParentMessage(){
       echo "Je suis le parent et je donne access a cette methode statique a mes enfants!<br/>";
    }

    public function getRole(){
        return $this->role;
    }
}

// remarquer le mot extends, ceci indique que notre classe ChildClass aura access a tous les proprietés et methodes dans notre classe ParentClass qui sont soit public soit protected.

class ChildClass extends ParentClass{
    //

    // si le parent a un constructeur, par defaut l'enfant prendra le constructuer du parent si aucun constructuer n'est precisé. Rien ne nous empeche, bien sur, d'ecrire nos propres methodes et proprietés dans notre classe!  

}
// comme nous pouvons le voir ici, nous n'avons rien rajouté dans notre classe ChildClass. Pourtant, elle arrive bien a avoir access aux methodes et aux proprietés de notre classe ParentClass GRACE au fait que via l'instruction "extends" elle herite des methodes et propreités de la classe ParentClass et donc y a access!
$child=new ChildClass("child");
$child->getParentMessage();
echo $child->getRole();

// bien que accesible dans les enfants de celle ci, la proprieté $role de notre parent n'est pas accessible via une instance en dehors de notre classe

// va declencher une erreur 
/*
echo $child->role;
*/


?>