<?php

spl_autoload_register(function ($class){
    // ici j'accede au namespace de la classe!
   var_dump($class);

    $file=str_replace("\\","/",$class. '.php');
    var_dump($file);
    
    require_once("../app/".$file);
    
});

?>