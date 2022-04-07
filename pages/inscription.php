<?php 
    include("../../config.php") ;
    include("../../common/form.class.php") ;
    include("../../common/formNews.class.php") ;
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
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>

<section class="inscription">

<?php 

    $formInscription->action ="signin.php" ;
    $formInscription->title ="Inscritpion" ;
    $formInscription->submitText ="Je m'inscrit !" ;
    
    echo $formInscription->afficheForm() ; 
?>

</section>
    
</body>
</html>
