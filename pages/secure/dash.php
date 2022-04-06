<section class="dash">
    <a href="/logout.php">Déconnexion</a>
    <?php 
        $rqUser = $mysqli->query("SELECT * FROM users WHERE id=".$_SESSION["idUser"]."") ;
        $user = $rqUser->fetch_object() ; 
        echo $user->email ;

        $formNews->action ="news.php" ;
        $formNews->title ="Ajouter une News" ;
        $formNews->submitText ="publier" ;

        echo $formNews->afficheForm() ; 
    ?>



</section>