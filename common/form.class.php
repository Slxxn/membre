<?php
    class FormHtml{

        public $action ='' ;
        public $title ='' ;
        public $submitText ='' ; 

        function afficheForm(){

            return '<div class="formConnexion">
                        <form action="'.$this->action.'" method="post">
                            <h2>'.$this->title.'</h2>
                            <label for="">Email</label>
                            <input type="text" name="email" placeholder=" Adresse.mail@exemple.com">
                            <label for="">Mot de passe</label>
                            <input type="text" name="password" placeholder=" Votre Mot de passe ici">
                            <input type="submit" class="btnSubmit" value="'.$this->submitText.'">
                        </form>   
                    </div>' ;
        }

    }
?>