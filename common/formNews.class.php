
<?php

    class FormNewsHtml{

        public $action ='' ;
        public $title ='' ;
        public $submitText ='' ; 
        public $mail ='' ;

        function afficheForm(){

            return '<div class="connexionStatut">
                        <h3>Connecté en tant que:</h3>
                        <h4 class="mail">'.$this->mail.'</h4>
                        <a href="/logout.php">Déconnexion</a>
                    </div>

                    <div class="formNews">
                        <form action="'.$this->action.'" method="post">
                            <h2>'.$this->title.'</h2>
                            <label for="">Actu</label>
                            <input type="text" class="newsText" name="actu" placeholder="LA POSTE EN MOTOCROSS AU GROS MORNE !">
                            <input type="submit" class="btnSubmit" value="'.$this->submitText.'">
                        </form>        
                    </div>';
           
        }

    }
?>