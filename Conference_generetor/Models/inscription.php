<?php
    require_once("connection.php");
    
    function setInscription($nom, $prenom, $email){
        $connection = getConnection();
        
        $query = "INSERT INTO participant(nom_participant, prenom_participant, email_participant, id_conf_conference) VALUES (?, ?, ?, ?)";
        
        $prepare_query = $connection->prepare($query);

        $result_conference = $prepare_query->execute([$nom, $prenom, $email,(int) $_ENV["CONFERENCE_TEST"]]);
        
        return $result_conference;
    }
?>