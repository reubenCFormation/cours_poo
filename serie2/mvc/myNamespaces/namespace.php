<?php

/*
    Un namespace en PHP est comme un conteneur virtuelle qui va contenir une certaine arborescence de dossiers et fichiers. Un namespace est un espace "vierge" ou nous pouvons definir les classes que l'on souhaite.Les classes dans un namespace seront definis par ce namespace. Par example, ici si je vais declarer une class MyClass, le nom complet de la classe sera myNamespace\MyClass et non plus MyClass. Les namespaes ont un avantage principale
    1) Notre application peux etre susceptible de grandir. Lorsque elle va grandir, elle se peux que nous allons vouloir avoir le meme nom pour deux classes differrents. Avec les namespaces, ceci est possible, on peux avoir deux classes avec le meme nom et tant que elle se trouvent dans un namespace different, elles seront reconnu comme etant distinct puisque le nom de la classe sera rattaché a son namespace

  

*/

// ici je peux definir un namespace 

namespace myNamspace;



// que se passe t'il si je veux instancier une classe php?

// je vais avoir une erreur, je suis dans mon propre namespace (comme une boite vide en qq sorte!), et je n'ai pas de classe DateTime dans mon namespace. Une erreur va se declencher!
/*
$date=new DateTime();

var_dump($date);
*/




// je vais devoir sortir de mon namespace actuelle pour pouvoir acceder a la classe DateTime. Pour sortir de notre namespace il suffit de faire un "\"!
/*
$newDate=new \DateTime();

var_dump($newDate);
*/


?>