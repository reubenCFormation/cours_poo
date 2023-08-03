<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    </head>

    <body>
    <div class="container">
        <h4 class="text-center text-success"> Bienvenue a la page pour inserer un utilisateur! </h4>
        <?php if(isset($warningMsg)):?>
            <h4 class="text-center text-danger"> <?php echo $warningMsg ?> </h4>
        <?php endif ?>
       
        <!-- Ici avec action, je vais declencher une autre url, et cette url va a son tour appeler un controller et sa methode associé si l'ai bien mappé avec altorouter bien entendu! Je peux faire des controles pour m'assurer que tous mes données sont bien rensiegnés!-->
        <form method="post" action="<?php echo dirname($_SERVER["SCRIPT_NAME"])."/userInserted" ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Firstname</label>
                <input type="text" class="form-control" name="firstname" >
       
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Lastname</label>
                <input type="text" class="form-control" name="lastname" >
       
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email">
       
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                 <input type="password" class="form-control" name="password">
             </div>

             <div class="form-group">
                <div class="text-center"> Description </div>
                <div class="col-6">
                    <textarea cols="40" rows="10" name="description"> </textarea>
                </div>
               
             </div>

             <br/>
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         
     </form>    

    </div>
    </body>
</html>