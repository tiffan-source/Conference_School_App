<?php

require_once("Models/publication.php");

class Publication_controller{
    static public function create_publication_controller(){
        if ($_POST) {
            # code...
        }
        require_once "Views/create_publication.php";
    }
}