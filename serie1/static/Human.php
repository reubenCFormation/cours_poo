<?php
 // on a maintenant pas mal vu le mot clé $this. Le mot clé $this fait reference a une INSTANCE de la classe lors que on est en train d'ecrire DANS la classe!

 // On a aussi le mot clé self. Le mot clé self fait reference a une proprieté ou a une methode STATIQUE lors que nous nous trouvons DANS la classe!

 // si on reprend notre classe User
require_once('./Connect.php');
 class Human{
    // ici on est d'accord que sauf cas extraordinatire, chaque étre humain habite sur terre et et appartien a l'espece humaine. Etant donnée que c'est la meme chose dans chaque cas et que ca ne vas pas varier d'instance en instance,nous allons mettre les proprietés ici en statique!
    private static string $species="human";
    private static string $planet="earth";
    
   

    public static function getClassName(){
        // cette fonction va nous retourner le nom de la classe dans laquelle on se trouve actuellement, dans ce cas la, ca sera User!
        return self::class;
    }

    public static function getDescription(){
        
        // pour faire appel a une proprieté statique DANS la classe, nous allons utiliser le mot clé self suivi de la proprieté statique a laquelle nous souhaitons acceder. Ca s'ecrit self::$property
        return "je suis de l'espece"." ".self::$species." "."et j'habite sur la planete"." ".self::$planet;
    }
 }
 
 /*

 $description=Human::getDescription();
 echo $description;
 */

 

 // pour avoir access au noms de notre classe!
 
 

