<?php
 // on a maintenant pas mal vu le mot clé $this. Le mot clé $this fait reference a une INSTANCE de la classe lors que on est en train d'ecrire DANS la classe!

 // On a aussi le mot clé self. Le mot clé self fait reference a une proprieté ou a une methode STATIQUE lors que nous nous trouvons DANS la classe!

 // si on reprend notre classe User
require_once('./Connect.php');
 class Human{
    // ici on est d'accord que nos utilisateurs appartiennent tous a l'espece humain, ils ont tous 2 jambes et 2 yeux. Sauf cas extraordinaire, il me semble que c'est la meme chose pour chacun d'entre nous en tant que humains!
    private static string $species="human";
    private static int $legs=2;
    private static int $eyes=2;
    
    public static function findAll(){
        // comment je fais appel a une proprieté statique et noter que je suis en train d'utiliser la classe Connect et non une INSTANCE de celle ci!. La notation est la suivante. classe::methode()
        $dbConnector=Connect::connectToDb();
        
        $sql="SELECT * FROM users";
        $statement=$dbConnector->query($sql);
        $users=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public static function getClassName(){
        // cette fonction va nous retourner le nom de la classe dans laquelle on se trouve actuellement, dans ce cas la, ca sera User!
        return self::class;
    }

    public static function getDescription(){
        
        // pour faire appel a une proprieté statique DANS la classe, nous allons utiliser le mot clé self suivi de la proprieté statique a laquelle nous souhaitons acceder. Ca s'ecrit self::$property
        return "je suis de l'espece"." ".self::$species." "."j'ai"." ".self::$legs." "."jambes ainsi que "." ".self::$eyes." "."yeux et finalement je suis dans une classe qui s'apelle"." ".self::getClassName()."<br/>";
    }
 }
/*
 $description=Human::getDescription();
 echo $description;
 */

 // pour voir le nombre de jambes de chacun! 
 
 




 


?>