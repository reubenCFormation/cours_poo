<?php
require_once('../vendor/autoload.php');
require_once('./register.php');

$router=new AltoRouter();

$baseUrl=dirname($_SERVER["SCRIPT_NAME"]);

$router->setBasePath($baseUrl);

use controller\MainController;


// comment faire lors que nous avions plusiers parametres dans un controlleur?

$router->map("GET","/getOneParam/[i:value]",["controller\MainController","getOneParam"]);
$router->map("GET","/getSeveralParams/[i:value1]/[i:value2]",["controller\MainController","getSeveralParams"]);

$getMatch=$router->match();

if($getMatch){
    // ici nous pouvons constater que lors que nous delcenchons la route /getSeveralParams, nous avons un tableau associatif avec deux clés differentes.Il serai compliqué de devoir a chaque appel de ma methode faire des conditions pour connaitre le nombre de parametres et ensuite faire appel a la fonction en precistant chaque clé. Cela va nous contraindre a écrire beaucoup de lignes de code et va grandement reduire l'aspect generique du "point d'entréé de mon application". Avec quel que lignes de code, nous allons pouvoir "generiser" le nombre de parametres pour que si il y a 1 ou 10, ca reviendra aux memes pour nous! 

    $params=$getMatch["params"];
    echo "AVANT conversion en tableau numerique! <br/>";
    echo '<pre>';
    var_dump($params);
    echo '</pre>';

    // avec la fonction array_values je vais pouvoir transformer mon tableau associatif php en tableau numerique! 

    $arrayValues=array_values($params);
    echo "APRES Conversion en tableau numerique!<br/>";
    echo '<pre>';
    var_dump($arrayValues);
    echo '</pre>';

    // enfin avec le spread operator, je vais pouvoir "unpacker mon tableau". Avec le unpacking, c'etait comme si j'etait en train d'enlever les crochets de mon tableau mais les valeurs vont rester les memes. Je vais donc me retrouver avec autant de chaines de caracteres differents que de parametres!

    

    echo "Apres Unpacking!<br/>";
    echo '<pre>';
    var_dump(...$arrayValues);
    echo '</pre>';

    // maintenant il suffit d'instancier et de passer $arrayValues en parametres! 

    $controller=$getMatch["target"][0];
    $action=$getMatch["target"][1];

    $controller=new $controller();
    // ici je vais preciser tous les arguments de maniere dynamique!;
    $controller->$action(...$arrayValues);


}




?>