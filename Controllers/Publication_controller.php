<?php

require_once("Models/publication.php");


class Publication_controller{
    static public function create_publication_controller(){
        $data = Conference::getAllConference();
        $conf_Id_Err = "";
        $pub_Title_Err  = "";
        $pub_Content_Err = "";
        if ($_POST) {
            
            $conference_id = $_POST['id_selected'];
            $publication_name= $_POST['nom_pub'];
            $publication_content= $_POST['content_pub'];

            if (empty($conference_id) || $conference_id == "empty") {
                $conf_Id_Err = "*You must have selected a conference ";
            }else if(empty($publication_name)){
                $pub_Title_Err   = "*You must have mentionned a publication name";
            }else if(empty($publication_content)){
                $pub_Content_Err = "*You must have mentionned the publication content";
            }else{
                ( new Publication(null, $publication_name,$publication_content) )->createPublication($conference_id);
            }

        }
        require_once "Views/create_publication.php";
    }
}