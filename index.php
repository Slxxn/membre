<?php 
    include("config.php") ;
    include("common/form.class.php") ;
    include("common/formNews.class.php") ;
    $formNews = new FormNewsHtml() ;
    $formConnexion = new FormHtml() ;
    $formInscription = new FormHtml() ;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Membre</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!--------------------------------->
    <!--------------------------------->
        <!-- header section start -->

    <header>
        <h1>Virtual dash</h1>
    </header>

        <!-- header section end -->
    <!--------------------------------->
    <!--------------------------------->
     <!-- Connexion section start -->

    <?php include("pages/connexion.php") ?>

         <!-- Connexion section end -->
        <!--------------------------------->
        <!--------------------------------->
        <!-- inscription section start -->

    <?php include("pages/inscription.php") ?>

      <!-- inscription section end -->
    <!--------------------------------->
    <!--------------------------------->
        <!-- Dash section start -->

    <?php

        if(isset($_SESSION["idUser"])){
            include("pages/secure/dash.php") ;
        }else{
            include("pages/connexion.php") ;
            include("pages/inscription.php") ;
        }

    ?>

    

        <!-- Dash section end -->
    <!--------------------------------->
    <!--------------------------------->
        <!-- footer section start -->

    <footer>
        <h3>
            <?php  echo date("Y") ?>
        </h3>
    </footer>

    <!-- footer section end -->
    
</body>
</html>