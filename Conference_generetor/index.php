<?php
require("Controllers/acceuil_controller.php");

if(isset($_GET['action']) && $_GET['action']!=''){

}else{
    getConference();
}
