<?php
    require_once("Models/participant.php");

    class Participant_controller{

        static public function checker_participant_controller(){

            $data = Participant::getAllParticipant();

            require_once "Views/gestion_participant.php";
        }

        static public function rejeter_participant_controller($id_participant){

            $data = Participant::getAllParticipant();

            if($id_participant){
                
                $participant_to_delete = Participant::getParticipant($id_participant);

                $participant_to_delete->deleteParticipant();
                
                $data = Participant::getAllParticipant();

                require_once("Views/gestion_participant.php");
            }

        }

        static public function valider_participant_controller($id_participant){

            $data = Participant::getAllParticipant();

            if($id_participant){
                
                $participant_to_delete = Participant::getParticipant($id_participant);

                $participant_to_delete->updateParticipant(array("inscrit"=>"OUI"));

                $data = Participant::getAllParticipant();

                require_once("Views/gestion_participant.php");
            }

        }

    }
?>