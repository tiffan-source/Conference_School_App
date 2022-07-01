<?php
    require_once("connection.php");

    function setInscription(){
        $connection = getConnection();
        
        $query = "INSERT INTO participant (nom_participant, prenom_participant, email_participant, id_conf_conference, ) VALUES (?, ?, ?, ?)";
        
        $prepare_query = $connection->prepare($query);

        $result_conference = $prepare_query->execute([$lastname, $firstname, $email, 7]);
        
        return $result_conference;
    }
?>