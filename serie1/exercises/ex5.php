<?php
/*
Creer un dossier qui s'apelle ex5. Creer un fichier Animal.php, ainsi que un fichier Connect.php
Reprenez votre classe Animal crée depuis et placez son contenu dans le fichier Animal.php

1) Creer une base de données que vous allez appelez my_animals
2) Creer une table animals qui aura les champs suivants:
    a) id INT PRIMARY KEY AUTO_INCREMENT NOT NULL
    b) name VARCHAR (255) NOT NULL
    c) type VARCHAR (255) NOT NULL
    d) legs INT NOT NULL
    e) weight INT NOT NULL
    f) isDomestic TINYINT (1) NOT NULL DEFAULT 1

3) Utilisez ce jeu de données pour le moment et executer les lignes suivantes
INSERT INTO animals(name,type,legs,weight,isDomestic) VALUES('goldie','mammal',4,80,1);
INSERT INTO animals(name,type,legs,weight,isDomestic) VALUES('cattie','mammal',4,25,1);
INSERT INTO animals(name,type,legs,weight,isDomestic) VALUES('fluffy','mammal',4,70,1);
INSERT INTO animals(name,type,legs,weight,isDomestic) VALUES('shrek','oger',2,200,0);
INSERT INTO animals(name,type,legs,weight,isDomestic) VALUES('hulk','monster',2,300,0);




4) Trouvez un moyen de pouvoir recuperer tous vos animaux avec une methode statique

5) ajoutez une proprieté privé statique qui sera un integer et qui va s'appeler $count, elle sera null par defaut

6) ajoutez une methode statique pour nous retourner le nombre d'animaux dans notre base de données. Utilisez cette informations pour determine la valeur de notre proprieté statique $count.

7) trouvez un moyen de pouvoir acceder aux nombres d'animaux dans notre base de données EN DEHORS de notre classe Animal

BONUS!

 Dans votre classe Animal ecrivez une methode pour pouvoir inserer un animal (une instance de la classe Animal) en base de données (ceci n'est pas une methode statique). Hint: pensez a vos proprietés dans la classe comme etant des champs de la table animals et encore un hint: Pensez a la fonction php intval pour transformer une proprieté de type boolean en integer (vous en aurai besoin)!

*/


?>