<?php

require_once('./register.php');

/*
Plus communement, on pouvoir charger le fichier contenu dans un namespace avec le mot clé use. Par exemple, ici je vais faire un use de mes namespaces. On va mettre le namespace suivi par le nom de la classe!
*/
// ici je dois utiliser un alias pour differencier entre ma premiere classe User et ma Deuxieme classe User pour pouvoir differincier quelle classe je suis vraiment en train d'utiliser! Le nom entier de ma classe correspond a firstNamespace\User
use classes\Game;
// alias pour pas avoir deux fois new User
use classes\User;

use models\MyModel;


$user=new User();
$user->sayHello();


$myGame=new Game();
$myGame->sayHello();

$newModel=new MyModel();
$newModel->sayHello();

echo '<hr/>';
// remarquer ici que la classe Game est maintenant reconnu, donc nous aurons pas besoin de refaire appel a la fonction spl_autoload_register. Le contenu de notre classe est deja en memoire pour php, pas besoin de refaire appel a un require_once

echo "Pas de autoload ici, le contenu de la classe est deja memorisé! <br/>!";
$myGame=new Game();
$myGame->sayHello();







?>