<?php
require_once("Models/inscription.php");

function getParticipant_Controller(){
    $lastname_Err = "";
    $firstname_Err  = "";
    $email_Err = "";

    if($_POST){
        
        $lastname = $_POST["lastname"];
        $firstname = $_POST["firstname"];
        $email = $_POST["email"];

        if (empty($lastname) || $lastname == "empty") {
            $lastname_Err = "*You must have selected your lastname !";
        }else if(empty($firstname)){
            $firstname_Err = "*You must have mentionned a firstname !";
        }else if(empty($email)){
            $email_Err = "*You must have mentionned your email !";
        }else{
            setInscription($lastname, $firstname, $email);
        }
    }
    include_once("Views/inscription_view.php");

}