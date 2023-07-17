<?php
namespace model;
use controller\BaseController;
use PDOException;

class User{

    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $description;
    private $password;
    // si je ne precise pas d'id ca sera null par defaut
    public function __construct($firstname,$lastname,$email,$description,$password,$id=null){
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->password=$password;
        $this->description=$description;
       

        if($id){
            $this->id=$id;
        }
    }


    public function insert(){
        try{
            $dbConnector=BaseController::connect("serie1_exo_1_solution");
            $sql="INSERT INTO users (firstname,lastname,email,password,description) VALUES (?,?,?,?,?)";
            $statement=$dbConnector->prepare($sql);
            $statement->execute([$this->firstname,$this->lastname,$this->email,$this->password,$this->description]);
            return true;
        }
        // je suis dans une namespace donc je dois sortir de mon namespace pour pouvoir acceder a la classe PDOException!
        catch(\PDOException $e){
            echo $e->getMessage();
        }
      

       
        
    }

    public static function findAll(){
        try{
            $dbConnector=BaseController::connect("serie1_exo_1_solution");
            $sql="SELECT * FROM users";
            $statement=$dbConnector->query($sql);
            // je suis dans un namespace,donc je dois sortir du namespace
            $users=$statement->fetchAll(\PDO::FETCH_ASSOC);
           

            $usersObjArr=[];

            foreach($users as $user){
                $newUser=new User($user["firstname"],$user["lastname"],$user["email"],$user["description"],$user["password"]);
                $usersObjArr[]=$newUser;
            }
           
            return $usersObjArr;
        }
        // je suis dans un namespace donc je dois sortir du namespace
        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getFirstName(){
        return $this->firstname;
    }

    public function getLastName(){
        return $this->lastname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getDescription(){
        return $this->description;
    }
}


?>