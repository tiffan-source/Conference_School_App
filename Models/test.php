<?php
    require("conference.php");

    $new_conference = new Conference(1);

    var_dump($new_conference->updateConference(["description"=> "SOMETHING ELSE", "status" => "EN COURS"]));
?>