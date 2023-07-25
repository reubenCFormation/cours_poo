<?php
/*
1) En reprenant l'example des animaux avec l'heritage que nous venons de voir (les classes Animal,Mammal,Reptile), faites les modifications suivantes. Nous n'allons plus determiner si un animal est domestique ou non dans la classe Animal mais plutot dans les classes des enfants (Mammal et Reptile!). Pour un reptile, il n'est pas domestiqué si il pese plus de 100 kilos ou que il a plus de 4 jambes (oui je sais que c'est absurd). Pour un Mammal, il ne sera pas domestique si il pese plus de 200 kilos ou que il a plus de 4 jambes (encore oui je sais que c'est absurd). Il va falloir mettre cette logique dans vos constructeurs pour Reptile et pour Mammal.


2)Enlevez vos animaux actuelle dans votre base de données avec la ligne suivante (Truncate Table animals)

3) Rajoutez un champ dans votre base de données en tapant les lignes suivantes dans votre phpmyadmin Alter Table animals ADD COLUMN species VARCHAR (255) NOT NULL. Assurez vous de bien definir le $species dans vos classes enfants (Mammal,Reptile)

4) Dans votre classe Animal, rajoutez une methode  que vous appelera insert qui aura pour but d'inserer un animal dans votre base de données avec tous les champs pertinents (name,type,species,legs,weight isDomestic) Cette fonction doit fonctionner sur vos instances de Mammal et de Reptile. Donc meme si la methode insert sera dans la classe Animal, vous allez y faire appel sur vos instances de Mammal ou de Reptile

5) Enfin, dans vos classes Mammal et Reptile, creer dans chacune une methode statique pour pouvoir recuperer dans votre base de données tous les animaux qui ont le meme type que le $type defini pour votre classe

6) BONUS: Dans votre classe Animal, creer une fonction qui va pouvoir recuperer tous nos animaux. Retourner un seul tableau qui contiendront vos instances (soit Mammal, soit Reptile). Votre fonction doit etre statique







*/


?>