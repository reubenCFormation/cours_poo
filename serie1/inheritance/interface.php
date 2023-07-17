<?php
/*


 Une interface est une forme de contrat qui va nous donner une ou plusiers fonctions. Nous aurons aussi les informations concernant la visibilité de la fonction (public,protected,private) ainsi que si celle ci est static etc. Les classes qui vont "implementer" notre interface devront se servir de ces fonctions defini dans l'interface

 Une interface est une facon de rendre nos classes plus consistants et de forcer certaines classes a avoir des noms de fonctions qui pourront etre utile. Ainsi, les classes pourront ecrire leur propre logique a la fonction tout en respectant certaines normes (nom,visibilité etc.) Ceci permet un code plus lisible,modular est consistant.

 Contrairement a l'heritage, une classe peux implementer plusiers interfaces et ca nous donne un grande avantage lors que nous voulons utiliser plusiers fonctionnalités de deux entités qui ne sont pas forcement lié. 
*/

interface MyPizzaTemplate{
    
    // imaginons nous avons plusiers pizzerias qui veulent adopter des standars commun. Chaque standard sera different mais chaque restaruant va voulour recuprer leurs pizzas et en cuisinir plusiers. Mais c'est a CHAQUE restaraunt de definir comment ils le feront, l'interace nous donne juste les actions a suivre!
    // les methodes des interfaces doivent entre public
    public function getAllPizzas();
    public function cookVeggiePizza();
    public function cookMeatLoversPizza();
    public function getIngredientsInfo(array $ingredients);
}
 
// ici la classe MyImplements doit implementer MyInterface et donc doit avoir une methode que elle va devoir appeler functionName. Cette methode va devoit etre publique
class MyFirstPizzeria implements MyPizzaTemplate{
   

   public function getIngredientsInfo(array $ingredients)
   {
      return $ingredients;
   }
   
     public function getAllPizzas(){
        // va recuprer tous les pizzas du restaurant
        $sql="SELECT * FROM pizzas";
        //etc....
     }
     public function cookVeggiePizza(){
        return "Les instructions pour cuisinir une pizza vegeterienne";
     }

     public function cookMeatLoversPizza(){
        return "Les instructions pour cuisinir une pizza carnivoireuse!";
    }

    
}
// ici je vais pouvoir instancier ma classe comme d'habitude
$newPizzeria=new MyFirstPizzeria();
$instructionsMeatLovers=$newPizzeria->cookMeatLoversPizza();
//var_dump($instructionsMeatLovers);
$ingredients=$newPizzeria->getIngredientsInfo(["Flour","Olives","Cucumbers","Peperonni"]);
//var_dump($ingredients);

?>