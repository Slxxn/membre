<section class="connexion">

        <?php
            $formConnexion->action ="login.php" ;
            $formConnexion->title ="Connexion" ;
            $formConnexion->submitText ="Connexion" ;

            echo $formConnexion->afficheForm() ; 
        ?>
                               
    </section>