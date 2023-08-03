<?php
namespace controller;
use controller\BaseController;
use model\User;

class MainController extends BaseController {
    public function renderAllUsers(){
        $homeMsg="Here is a simple example of how to render to a home page!";
        // La commande __DIR__ va nous afficher l'emplacement de notre dossier actuelle. Ici nous pouvons voir que nous avons besoin de sortir de notre dossier controller et de rentrer dans notre dossier view et acceder a la page home.php pour pouvoir afficher sont contenu. ensuite nous allons transmettre la variable a la vue!

        // ici je fais appel a la methode statique de mon Model User pour recuperer tous mes utilisateurs!
        $users=User::findAll();

        
        $this->render("../view/home.php",["message"=>$homeMsg,"myUsers"=>$users]);
    }

    // et si on avait marre de tous ces animaux? Ecrivons une fonction pour pouvoir inserer un utilisateur en base de données!

    public function renderInsertUser(){
        // ici je n'ai pas de message a transmettre, je veux juste faire appel a une page de formulaire pour pouvoir inserer un utilisateur et rien d'autre!

        $this->render('../view/insertUser.php',[]);
    }

    public function insertUser(){
        // ma variable $_POST est une superglobale, elle est donc accesible partout dans mon script!
        if(!empty($_POST)){
            if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["description"])&& !empty($_POST["password"])){
                // meme logique pour recuperer nos variables $_POST!
               
                
                $firstname=$_POST["firstname"];
                $lastname=$_POST["lastname"];
                $email=$_POST["email"];
                $description=$_POST["description"];
                $passwordStr=$_POST["password"];
                // je hache mon mot de passe
                $hash=password_hash($passwordStr,PASSWORD_BCRYPT);
                // j'instancie mon utilisateur on lui passant les valeurs pertinantes!
                $user=new User($firstname,$lastname,$email,$description,$hash);
                // j'insere mon utilisateur et si ca fonctionne je vais etre retourné un boolean!
                $getUserIsInserted=$user->insert();

                if($getUserIsInserted){
                    $this->redirect(dirname($_SERVER["SCRIPT_NAME"]));
                }

                else{
                    $this->render("../view/insertUser.php",["warningMsg"=>"Une erreur s'est produite lors de votre insertion!"]);
                }
            }
            else{

                $this->render("../view/insertUser.php",["warningMsg"=>"Il vous reste des champs vide dans votre formulaire!"]);
              
             }
         }
        else{

            $this->render("../view/insertUser.php",["warningMsg"=>"Vieullez remplir votre formulaire!"]);
          
        }

       
        
        
    }
}

?>