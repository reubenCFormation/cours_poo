<?php
require_once('./Connect.php');
 class User{
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private int $id;
    // ici dans mon constructeur,nous allons utiliser la proprieté $id que lors que nous souhaitons l'utiliser
    public function __construct($firstname,$lastname,$email,$password,$id=null){
        if($id){
            $this->id=$id;
        }
            
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            $this->email=$email;
            $this->password=$password;
           

        // si notre parametre $id n'est pas null (si nous avons choisi de le definir), nous allons definir la proprieté
        
        
    }

    // encore une fois, ici,si je creé 10 instances d'utilisateurs, la methode findAll (pour recuperer tous nos utilisateurs) va nous  retourner exactement la meme chose pour chacun de nos instances. C'est pour ca que nous allons mettre cette methode en static et ainis elle fera partie de la classe et non d'une instance!
    public static function findAll(){
        // comment je fais appel a une proprieté statique et noter que je suis en train d'utiliser la classe Connect et non une INSTANCE de celle ci!. La notation est la suivante. classe::methode()
        try{
            $dbConnector=Connect::connectToDb();
           
        
        $sql="SELECT * FROM users";
        $statement=$dbConnector->query($sql);
       
       
        $users=$statement->fetchAll(PDO::FETCH_ASSOC);
        $usersObjArr=[];

        foreach($users as $user){
            $usersObjArr[]=new User($user["firstname"],$user["lastname"],$user["email"],$user["password"],$user["id"]);
        }
        
        return $usersObjArr;
       
        }

        catch(PDOException $e){
           
            echo $e->getMessage();
        }
        
    }

  public function setEmail($email){
    $this->email=$email;
  }

  public function setPassword($password){
    $this->password=$password;
  }

    public function getEmail(){
        return $this->email;
    }

    public function getFirstName(){
        return $this->firstname;
    }



    public function getLastName(){
        return $this->lastname;
    }

    public function getId(){
        return $this->id;
    }

  

    

    
 }

 // ici je fais appel a la methode findAll sur la classe User et non sur un objet en particulier!
 $users=User::findAll();

 echo '<pre>';
 var_dump($users);
 echo '</pre>';





 


 


?>