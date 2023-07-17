<?php
/*
1)Creer un dossier myAnimals 

2) Rentrer dans ce dossier et installer altorouter comme nous l'avons deja vu

3)Creer un dossier public et dans ce dossier mettez y un fichier index.php, un fichier register.php et votre fichier .htaccess 

4) Creer un dossier app et dans ce dossier creer un dossier model ainsi que un dossier controller.

5)Creer un dossier view dans lequelle vous allez ecrire vos views. 

6) Dans le dossier model, creer trois fichiers. Un fichier Animal.php, un fichier Mammal.php et un fichier Reptile.php Reprenez le meme code que dans serie1/ex6 et mettez les dans les classes respecitfes. Nous allons partir de cette base la. Toutes ces trois classes seront dans le namespace model. Dans la classe Animal, rajoutez une methode pour recuperer un Animal selon une id en particulier et faites en sorte de retourner une instance soit de Mammal, soit de Reptile, en fonction de l'Animal que nous avons recuperé!.

7) Dans votre dossier view, 
  a)vous allez avoir un fichier home.php qui va lister tous vos animaux sous forme de tableau html. Sur ce fichier, vous allez avoir un lien pour pouvoir consulter les details d'un animal en particulier qui sera dans un fichier qui va s'appeler see_animal.php et ce fichier va nous lister les details des animaux
  b) Creer aussi un fichier que vous allez appeler insert.php et qui va nous afficher un formulaire pour inserer un Animal. Ce formulaire aura tous les champs correspondant (name,legs,weight,species). Pour determiner le type de notre animal, faites en select avec 2 choix (Mammal ou Reptile). 
  c)Creer un fichier header.php qui aura un lien accueil (ce lien va nous afficher tous nos animaux) et qui contiendra aussi un lien pour inserer un aniamal

8) Dans le dossier controller. Creer un fichier que vous allez appeler BaseController et donnez lui le meme contenu que on vient de voir (une fonction render et redirect). Creer un fichier que vous allez appeler AnimalController et creez y une classe que vous allez appeler AnimalController. 
 Mettez tous classes dans le namespace controller!
    a) Cette classe aura une methode pour recuperer tous nos animaux EN UTILISANT notre model Animal et ainsi va les transmettre a une vue. Pour preciser, nous allons transmettre un tableau d'objets a la vue, pas un tableau associatif. 

    b)Ecrivez une autre methode dans la classe AnimalController pour pouvoir acceder a un animal en particulier toujours DEPUIS le model Animal et transmettre les informations concernant cette animal a une vue differente. 

    c)Enfin, dans votre controller creer une methode pour pouvoir inserer un Animal.Si nous voulons inserer un Reptile, nous allons devoir creer une instance de Reptile. Si nous voulons inserer un Mammal, nous allons devoir creer une instance de Mammal.Apres que l'insrttion ait reussi, rediriger vers la page d'accueil (en Bonus, affichez un message de felicitations sur la page d'accueil indiquant que l'animal a bien pu etre inseré!) 

    

9)Avec altorouter, creer trois routes, une route (qui sera la route d'accueil pour voir tous nos animaux) et une 2eme route pour voir un Animal en particulier, et une troisieme route pour insere un animal


BONUS!
----------------------------------------------------------------------------------------------

1) Dans notre tableaux html,rajoutez un lien pour pouvoir modifier un animal que vous auriez choisi. Ce lien va vous pointer sur un formulaire pre-rempli. Dans le formulaire, faites en sorte de pouvoir modifier seulment les jambes et le poids de l'animal et rien d'autre.Pensez a la proprieté disabled. Dans vos models (soit Reptile,soit Mammal) , rajoutez une methode pour mettre a jour l'animal que vous veniez de modifier. Pensiez de verifier que l'animal est domestique ou non (son poids et ses jambes aurai pu changer). Dans cette methode, vous allez devoir faire une requette pour mettre a jour l'animal avec les nouvelles valeurs pertinentes. Enfin, lors que l'animal a bien etat modifié, faites une redirection vers la page d'accueil en souhaitant un message de feliciations! Il va falloir bien sur creer les views et les routes correspondatne

2) Rajouter dans votre classe AnimalController une methode pour pouvoir selectionner soit toutes nos instances de  Mammal, soit toutes nos instaces de Reptile. Transmettez ces informations a une vue correspondante (selon Mammal ou Reptile). Il va aussi falloir creer des views et des routes correspondante!
*/


?>