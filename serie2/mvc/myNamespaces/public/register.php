<?php


// que se passe t'il si j'enleve la declaration du namespace dans mes fichier?
/*
1)grace aux Use, mon autoloader va pouvoir automatiquement une classe (contenu dans un namespace qui s'est declenché);
2) Le use contient le nom complet du namespace qui sera reconnu comme une classe. Chaque fois que nous allons instancier une classe, nous aurons access a son namespace grace au USE.
3) Comme nous pouvons le constater la classe dans le namespace s'écrit avec des antislashs \. 
4) Nous allons donc ensuite faire des petites manipulations avec la fonction str_replace pour avoir des / au lieu d'avoir des \
5) vous l'auriez bien compris, il nommer vos donner des noms coherent a vos namespaces qui representent le bon chemin d'access de votre classe! Sinon, le fichier ne sera pas trouvé!
*/

spl_autoload_register(function ($class){
    // ici j'accede au namespace de la classe!
    echo "LA FONCTION SPL_AUTOLOAD SE DECLENCHE!";
    echo '<pre>';
    var_dump($class);
    echo '</pre>';
  

    $file=str_replace("\\","/",$class. '.php');
    var_dump($file);
    
    require_once("../app/".$file);
    
});

?>