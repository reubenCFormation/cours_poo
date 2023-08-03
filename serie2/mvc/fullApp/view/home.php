<!DOCTYPE html>

<html>
    <head> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>

    </head>

    <body>
        <div class="container">
            <h4 class="text-center text-success"> Bienvenue sur ma page d'accueil! </h4> 
            <!-- Ici j'affiche la variable que j'a transmis avec render! -->
            <?php if(isset($message)):?>
            <h4 class="text-info"> La variable transmise a notre vue!: <?php echo $message ?> </h4>
            <?php endif ?>

            
            <!-- Si on a bien des variables transmis a la vue je vais les afficher! -->
            <?php if(isset($myUsers)):?>
                <table class="table table-bordered">
                    <thead>
                        <th> prenom </th>
                        <th> nom </th>
                        <th> email </th>
                        <th>  description </th>
                    </thead>

                    <tbody>
                        <!-- Ici je vais boucler sur mes utilisateurs -->
                        <?php foreach($myUsers as $user):?>
                            <tr>
                                <td> <?php echo $user->getFirstName() ?> </td>
                                <td> <?php echo $user->getLastName() ?> </td>
                                <td> <?php echo $user->getEmail() ?> </td>
                                <td> <?php echo $user->getDescription() ?> </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif ?>
            <h4> Voulez vous inserer un utilisateur?  </h4>
            <!-- Ici je vais declencher une autre route qui va faire appel a une autre methode de mainController, cette fois-ci pour nous rendre sur notre formulaire pour ajouter un utilisateur! -->
            <a href="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/renderInsert"?>" class="btn btn-primary"> Ajouter! </a>

        </div>
        
    </body>
</html>