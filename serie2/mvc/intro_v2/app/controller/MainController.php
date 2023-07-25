<?php
namespace controller;

class MainController{
    public function getOneParam($param){
        echo "La valeur passé en argument est"." ".$param;
    }

    public function getSeveralParams($param1,$param2){
        echo "La valeur du premier argument est"." ".$param1;
        echo '<br/>';
        echo "La valeur du deuxieme argument est"." ".$param2;
    }
}



?>