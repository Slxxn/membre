<?php
    include ("config.php") ;

        /* user researche on data base */ 

    $rqUser = $mysqli->query("SELECT * FROM `users` WHERE `email`= '".$_POST["email"]."' AND `password`='".$_POST["password"]."' LIMIT 0,1") ;
    /* header("location:http://membre/logi.php") ; */
    
    if($rqUser->num_rows >0){

        /* session start */
        $user = $rqUser->fetch_object() ; 
        $_SESSION["idUser"] = $user->id ; 
        header("location:/index.php") ;

    }else{

        header("location:/index.php?connexion=err") ;
    }
?>