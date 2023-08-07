
<?php
/*
    En PHP, nous avons aussi des classes dite abstraites. Celles ci ne sont pas forecement utilisés trés souvent mais c'est important de comprendre le concept. Une classe abstraite est une classe qui ne peux PAS etre instancié. Les classes abstraites sont donc utilisés pour etre herité par un enfant. C'est comme une sorte de template sur lequelle l'enfant se basera

*/

abstract class AbstractClass{
    protected string $name;
    protected string $role;


    public static function abstractStatic(){
        echo "Abstract static method!";
    }

    // etant donnée que une classe Abstraite ne peux pas etre instancié, nous n'allons pas ecrire de constructeur dans celle ci!

    // si nous mettons le mot clé abstract a une methode, nous allons forcer la classe qui heritera eventuellement a utisliser cette methode et cette instance va definir ce que fait la methode!

    abstract protected function getRole();
    abstract protected function getName();
    // ici pas de mot clé abstract, les classes enfants ne seront pas forcer a defenir la fonction!
    public  function getObjectValues(){
        // ici le $this correspondrant a l'instance de notre ENFANT qui aura access aux proprietés du parent!
        return ["name"=>$this->getName(),"role"=>$this->getRole()];
    }
}
// ici si je n'ecrit ni la fonction getRole, ni la fonction getName dans ma classe ConcreteClass,ma classe sera immediatement souligner en rouge!
class ConcreteClass extends AbstractClass{
    // ici je vais definir mon constructeur et etant donné que j'herite de AbstractClass, je vais pouvoir definir mes proprietés $name ainsi que $role sans devoir les definir!

    public function __construct($role,$name){
        $this->role=$role;
        $this->name=$name;
    }
    public function getRole(){
        return $this->role;
    }

    public function getName(){
        return $this->name;
    }
}



$concreteClass1=new ConcreteClass("concrete","MyConcreteClass");
$concreteClass2=new ConcreteClass("another","AnotherConcreteClass");
// ici je vais pouvoir acceder aux proprietés de mon objet car j'ai access a la methode getObjectValues etant donnée que j'herite de AbstractClass!
 var_dump($concreteClass1->getObjectValues());
 echo '<br/>';
 // je peux bien evidement creer autant d'instances que je souhaite!
 var_dump($concreteClass2->getObjectValues());

?>