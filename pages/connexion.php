<?php 
    /* include("../../config.php") ;
    include("../../common/form.class.php") ;
    include("../../common/formNews.class.php") ;
    $formNews = new FormNewsHtml() ;
    $formConnexion = new FormHtml() ;
    $formInscription = new FormHtml() ; */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Membre</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
<section class="connexion">

        <?php
            $formConnexion->action ="login.php" ;
            $formConnexion->title ="Connexion" ;
            $formConnexion->submitText ="Connexion" ;

            echo $formConnexion->afficheForm() ; 
        
        ?>
                               
    </section>
    
</body>
</html>
