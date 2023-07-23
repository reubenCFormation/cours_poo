<?php
/*
Creer un dossier qui s'apelle ex5. Creer un fichier Animal.php, ainsi que un fichier Connect.php

1) Creer une base de données que vous allez appelez my_animals
2) Creer une table animals qui aura les champs suivants:
    a) id primary key auto increment not null
    b) name VARCHAR (255) NOT NULL
    c) type VARCHAR (255) NOT NULL
    d) legs INT NOT NULL
    e) weight INT NOT NULL
    f) isDomestic TINYINT (1) NOT NULL DEFAULT 1

3) Reprenez votre classe Animal et ecrivez y une methode pour pouvoir inserer un animal (une instance de la classe Animal) en base de données (ceci n'est pas une methode statique). Hint: pensez a vos proprietés dans la classe comme etant des champs de la table animals et encore un hint: Pensez a la fonction php intval pour transformer une proprieté de type boolean en integer!


4) apres avoir pu inserer plusiers animaux en base de données, trouvez un moyen de pouvoir tous les recuperer avec une methode statique! Pour faire ceci, rajoutez une proprieté privé $id a votre classe et ajoutez la au constructeur. Faites la meme chose que vous avez vu dans la classe User.

5) ajoutez une proprieté (privé ou publique) statique qui sera un integer et qui va s'appeler $count, elle sera null par defaut

6) ajoutez une methode statique pour nous retourner le nombre d'animaux dans notre base de données et en meme temps mettez a jour la proprieté statique $count dans la methode.

7) trouvez un moyen de pouvoir acceder aux nombres d'animaux dans notre base de données EN DEHORS de notre classe Animal

*/


?>