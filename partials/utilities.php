<?php
    //Recuperare la mail
    $user_mail = $_POST["mail"] ?? '';
    //Funzione per il controllo della mail
    function mail_ceck($user_mail){
        if($user_mail !== ''){

            if(str_contains($user_mail, '@') && str_contains($user_mail, '.')){
                $valid = true;
                return $valid;
            } else {
                $valid = false;
                return $valid; 
            }
        };
    };
?>