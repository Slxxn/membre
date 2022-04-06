<section class="inscription">

<?php 

    $formInscription->action ="signin.php" ;
    $formInscription->title ="Inscritpion" ;
    $formInscription->submitText ="Je m'inscrit !" ;
    
    echo $formInscription->afficheForm() ; 
?>

</section>