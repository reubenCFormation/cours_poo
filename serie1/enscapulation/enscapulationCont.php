<?php
 /*
   Nous avons vu comment meiux proteger nos proprietés pour ne pas pouvoir changer a la volée une proprieté que on ne souhaiterai pas changer. Nous comprenons peut etre un peu mieux a quoi peuvent servir les getters et les setters. Cependant,rien ne nous empeche de faire n'importe en mettant une valeur abberante dans un setter. Meme si les programmeurs sont censés etre raisonnable, on est toujours susceptible de commetre des erreurs!


 */

 class Employee{
    private int $age;
    private string $name;
    private int $salary;
    // afin de faire en sorte que nous ne pouvons pas mettre n'importe quoi, nous pouvons faire appel a nos setters directement dans le constructeur!. Notons aussi que je n'ai pas de setters pour name. Ceci veux dire que je ne veux jamais pouvoir modifier un nom apres l'instanciation de ma classe!
    public function __construct($age,$name,$salary){
        //$this->age=$age;
        $this->name=$name;
        //$this->salary=$salary;

        $this->setAge($age);
        $this->setSalary($salary);
    }

    //Ici, avec nos getters nous disons que nous souhaitons donnez la possibilité a nos instances que nous avons creer de pouvoir modifier l'age et le salaire d'un employé mais la c'est presque comme si nous serai en train de directement modifier la valeur de la proprieté. En plus de cela, rien ne nous empeche de mettre n'importe quoi dans notre constructeur. Nous pouvons rajouter des protections a nos setters pour ne pas mettre n'importe quoi.

    // ici je souhaiterai que le salaire soit entre 20 et 60. Si c'est pas le cas, je peux encore une fois lancer une exception
    public function setSalary($salary){
        if($salary>=20 && $salary<=60){
            $this->salary=$salary;
        }
        else{
            throw new Exception("Salaire interdit!");
        }
        
    }

    public function getSalary(){
        return $this->salary;
    }

    // de meme, ici je souhaiterai que notre age soit entre 1 et 100. Si ce n'est pas le cas, nous allons encore une fois lancer une exception
    public function setAge($age){
        if($age>=1 && $age<=100){
            $this->age=$age;
        }
        else{
            throw new Exception("Vous n'etre pas dans la bonne fourchette d'age!");
        }
    }

    public function getAge(){
        return $this->age;
    }
 }

// que va t'il se passer si je mets n'importe quoi pour le salaire de mon employé?
//$newEmployee=new Employee(40,"Jeremy",10000);

// ou que se passe t'il si je mets n'importe quoi pour l'age de mon employé?
//$newEmployee=new Employee(120,"Johnny",50);

// finalement remarquer que nous ne pouvons pas modifier le nom d'un employé. Nous pouvons seulment l'initialiser dans notre constructeur!

$newEmployee=new Employee(30,"Jeremy",40);
// va lancer une erreur!;
//$newEmployee->name="Blahblah";



?>