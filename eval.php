<?php



class Restaurant{
    protected bool $takeaway;
    protected bool $delivery;
    protected array $menu;
    private $franchiseName;

    public function __construct($takeaway,$delivery,$menu=[]){
        $this->takeaway=$takeaway;
        $this->delivery=$delivery;
        $this->menu=$menu;
    }

    public function getMenuCount(){
        return count($this->menu);
    }
}

class Pizzeria extends Restaurant{

}

$newPizzeria=new Pizzeria(true,true);

echo $newPizzeria->getMenuCount();


?>