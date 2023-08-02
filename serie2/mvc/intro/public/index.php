<?php
// ici je charge mes dependances etant donné que je viens d'installer la dependance altorouter avec mon composer require
require_once("../vendor/autoload.php");
require_once('../MainController.php');
// ici je vas creer une instance de mon package altorouter
/*
 si vous avez cette ligne en rouge meme apres avoir fait un require de votre autoload.php, rendez vous dans code->preferences->Settings et cliquer en haut a droite. Vous allez avoir un fichier settings.json qui va s'ouvrir. Dans ce fichier, tapez la ligne suivante:
"intelephense.environment.includePaths": [
    "vendor"
]
*/



$router=new AltoRouter();
// SCRIPT_NAME va nous retourner le chemin  du script qui est en train d'etre executé. Remarqué que il n'y a pas l'url complet car nous affichons que les dossiers et les fichiers, par le port et le hote!.
echo '<pre>';
var_dump($_SERVER["SCRIPT_NAME"]);
echo '</pre>';
// dirname va nous retourner notre chemin sans inclure le fichier dans lequelle on se trouve!
$baseUrl = dirname($_SERVER['SCRIPT_NAME']);
echo '<pre>';
var_dump($baseUrl);
echo '</pre>';

// ici notre routeur va construire ces chemins a partir du $baseUrl que nous venons de definir. Ceci faisant, tous les chemins conteindra notre $baseUrl que nous avons defini!
$router->setBasePath($baseUrl);

// ici je vais "mapper", ("chercher") des chemins differents. 
//$router->map("GET","/",["MainController","homePage"]);


$router->map("GET","/hello",["MainController","helloPage"],"helloRoute");

$router->map("GET","/randomInteger/[i:value]",["MainController","showRandomInt"],"randomIntRoute");
$router->map("GET","/redirect",["MainController","redirect"],"RedirectRoute");

// ici je vais faire appel a la fonction match de notre router pour savoir si un chemin a pu etre declenché
$getMatch=$router->match();

if($getMatch){
    /*
     si le chemin a pu etre declenché, nous allons etre retourné un tableau avec les informations differents!

    */
    echo "MATCH FOUND! <br/>";
    echo '<pre>';
    var_dump($getMatch);
    echo '</pre>';

   
   
    if($getMatch["params"]){
        echo "INSPECT PARAMS!";
        echo '<pre>';
        var_dump($getMatch["params"]);
        echo '</pre>';
    }
    
    $controller=$getMatch["target"][0];
    $method=$getMatch["target"][1];
    $newController=new $controller();
    
    if($getMatch["params"]){
        
        $newController->$method($getMatch["params"]["value"]);  
    }

    else{
        $newController->$method();
    }
    
    
}





?>

