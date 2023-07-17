<?php
require_once('../vendor/autoload.php');
require_once('./register.php');

// EXTRACT EXAMPLE!
// example  de extract!
$arr=["hello","world","how","are","you"];

$extractData=extract(["myKey"=>$arr]);

// avec la fonction extract,"myKey" (une clé) a pu devenir une variable qui s'apelle $myKey!" Avec extract, on va devoir utilisé un tableau associatif,sinon ca ne marchera pas etant donné que extract va transformer le nom de la clé en une variable!
echo "EXTRACT EXAMPLE <br/>";
echo '<pre>';
var_dump($myKey);
echo '</pre>';

// ici je charge mo
use controller\MainController;

$router=new AltoRouter();

$baseUrl=dirname($_SERVER["SCRIPT_NAME"]);

$router->setBasePath($baseUrl);

$router->map("GET","/",["controller\MainController","renderHome"]);

// ici lors que la route /insert et trouvez, je vais faire appel a une autre methode de mon controller pour pouvoir me rendre sur la vue pour inserer un autre utilisateur!

$router->map("GET","/renderInsert",["controller\MainController","renderInsertUser"]);

// ici je vais mapper mes URL avec post et non avec GET, ce qui veux dire que si j'ai des données a envoyer dans mon formulaire (ce qui est le cas lors que j'appelle cette route!), mes données ne seront pas visible!

$router->map("POST","/userInserted",["controller\MainController","insertUser"]);

$getMatch=$router->match();

if($getMatch){
   

    $controller=$getMatch["target"][0];
    $action=$getMatch["target"][1];

    $newController=new $controller();
    $newController->$action();
}

else{
    echo "NO MATCH FOUND!";
}



?>