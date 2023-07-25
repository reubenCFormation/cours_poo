<?php
 /*
    Le concept d'enscapulation fait reference a l'idée de l'accesibilité de nos proprietés et plus globalement fait aussi reference a la securisation de nos données. Il y a trois modes de visibilité pour nos proprietés et nos fonctions. Pour le moment nous allons que nous focaliser sur deux d'entres elles
    1)public. Jusqa present, tous nos proprietés ainsi que nos fonctions ont etait en visiblité public. Ceci veux dire que nos instances (objets) peuvent a tous moment modifier nos proprietés
    2)private. La proprieté Private veux dire que nous ne pouvons seulment modifier notre proprieté A L'INTERIEUR de la classe. Ceci veux dire que une instance ne peux pas modifier une proprieté privé directement 


 */

 class Employee{
    private int $age;
    private string $name;
    private int $salary;

    public function __construct($age,$name,$salary){
        $this->age=$age;
        $this->name=$name;
        $this->salary=$salary;
    }

    // si je veux tout de meme pouvoir acceder a certaines propriétés pour pouvoir les modifier, par exemple le salaire et l'age, je peux rajouter des setters et des getters et les mettre en mode public. Comme ca, elles seront accesible en dehors de la classe et on aura le droit de mes modifier. Maintenant, c'est peut etre un peu plus clair pourquoi nous avons mis des getters et des setters dans les exemples precedants!

    public function setSalary($salary){
        $this->salary=$salary;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function setAge($age){
        $this->age=$age;
    }

    public function getAge(){
        return $this->age;
    }

    public function getName(){
        return $this->name;
    }
 }

 $newEmployee=new Employee(23,"Johnny",30);
 // Ceci va nous lancer une erreur fatale car la proprieté $age est private et nous ne pouvons en aucun cas l'utiliser en dehors de notre classe!
 /*
 $newEmployee->age=30;
 */

 // ici si je veux mettre a jour le salaire de mon employé
 /*
 $newEmployee->setSalary(30);
 var_dump($newEmployee->getSalary());
 */

?>