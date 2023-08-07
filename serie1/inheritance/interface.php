<?php
/*


 Une interface est une forme de contrat qui va nous donner une ou plusiers fonctions. 

 Une interface est une facon de rendre nos classes plus consistants et de forcer certaines classes a avoir des comportement communs . Ainsi, les classes pourront ecrire leur propre logique a la fonction tout en respectant certaines normes (nom,visibilité etc.) Ceci permet un code plus lisible,modular est consistant.

 Contrairement a l'heritage, une classe peux implementer plusiers interfaces et ca nous donne un grande avantage lors que nous voulons utiliser plusiers fonctionnalités de deux entités qui ne sont pas forcement lié.
 
 Les interfaces sont particulierement utile lors que nous avons deux Classes qui sont trés differentes en termes de fonctionnalité mais qui ont tout de meme des comportements communs. 
*/

 // imaginons nous avons plusiers business. Un business qui vend des voitures et un business qui vend des pizzas. Ils serai pas forcement trés logique de les mettre dans une hiarchie de classes. Nous pourrions avoir une classe Global Business et faire heriter de cette classe mais on se retrouverai avec des milliers de extends . Cependant, un business a des fonctionnalités communes qui s'applique partout comme facturer un client, payer les salaires etc. Nous voudrions imposer a chaque Business de faire ceci et c'est pour cela que nous avons inventé des interfaces! 

interface MyBusinessTemplate{
    // dans une interface nous allons tout simplement definir le nom des fonctions et rien d'autre!
    public function billClients();

    public function paySalaries();

      
}
// ici avec le mot clé implements, je vais FORCER les classes Restaruant et CarDealership de definir les methodes que j'ai indiqué dans mon interface MyBusinessTemplate! La classe pourra tout de meme definir la methode comme elle le souhaite et lui donner les instructions que elle souhaite!
class Restaurant implements MyBusinessTemplate{

   public function billClients(){
      echo "Le restaurant genere sa facture!";
   }

   public function paySalaries(){
      echo "Le restaruant paye ses employés!";
   }

}

class CarDealership implements MyBusinessTemplate{
   public function billClients(){
      echo "Le dealership genere sa facture!";
   }

   public function paySalaries(){
      echo "Le dealership paye ses employés!";
   }

}
 
// ici la classe MyImplements doit implementer MyInterface et donc doit avoir une methode que elle va devoir appeler functionName. Cette methode va devoit etre publique

?>