<?php
 namespace controller;
 use controller\BaseController;
 use model\User;
 class UserController extends BaseController{

    public function renderSignUp(){
        $this->render('../view/signup.php');
    }

    public function signup(){
        if(!empty($_POST)){
            if($_POST["firstname"] && $_POST["lastname"] && $_POST["email"] && $_POST["description"] && $_POST["password"]){
                $firstname=$_POST["firstname"];
                $lastname=$_POST["lastname"];
                $email=$_POST["email"];
                $description=$_POST["description"];
                $passwordStr=$_POST["password"];

                $hashedPassword=password_hash($passwordStr,PASSWORD_BCRYPT);

                $newUser=new User($firstname,$lastname,$description,$email,$hashedPassword);

                if($newUser->insert()){
                    $this->redirect(dirname($_SERVER["SCRIPT_NAME"])."?successMsg=utilisateur bien insere");
                }

            
                
            }

            else{
                $this->render("../view/signup.php",["errorMsg"=>"Il vous manque des champs dans votre formulaire"]);
            }
        }

        else{
            $this->render('../view/signup.php',["errorMsg"=>"Viulliez remplir vos champs!"]);
        }

    }

    public function renderSignIn(){
        $this->render('../view/signin.php');
    }

    public function signIn(){

        if(!empty($_POST)){
            if($_POST["email"] && $_POST["password"]){
                $email=$_POST["email"];
                $passwordStr=$_POST["password"];
                $findUser=User::findByEmail($email);

                if($findUser){
                    $isPasswordVerified=password_verify($passwordStr,$findUser["password"]);

                    if($isPasswordVerified){
                        $_SESSION["user"]=$findUser;
                        $this->redirect(dirname($_SERVER["SCRIPT_NAME"]));
                    }
                }
            }
        }
       
    }

    public function logout(){
        session_destroy();
        $this->redirect(dirname($_SERVER["SCRIPT_NAME"]));
    }
    
 }

?>