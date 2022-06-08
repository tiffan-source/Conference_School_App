<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Bases/reset.css">
    <link rel="stylesheet" href="Style/Bases/base.css">
    <link rel="stylesheet" href="Style/Modules/links.css">
    <link rel="stylesheet" href="Style/Modules/title.css">
    <link rel="stylesheet" href="Style/Layouts/supprimer.layouts.css">

    <link rel="stylesheet" href="Style/Modules/button.css">
     <link rel="stylesheet" href="Style/Modules/supprimer.css">

    <title>delete_conference</title>
</head>
<body>
    <div id="content-app">


        <?php include("panel.php") ?>

        <div id="supprimer">
            <h1 class="title-delete">Supprimer une conférence</h1>
        <?php
            
               
                    include("../Models/conference.php");
                            
                    $conf = new conference(1);
                    
                    $tab = $conf->getAllId();
                    foreach ($tab as $x => $x_value){
                        echo "<div class='delete'>";
        
                        echo "<div class='delete-information'>";

                        echo "<span class='delete-information-conference'>".$x_value." #$x"."</span> <br>"."<span class='delete-information-modification'>Modifié le 15/06/2022</span>";
                        echo "</div>";
                        echo "<button onclick = 'deleteFunction($x)' class ='button button-delete'>Supprimer</button>";
                        
                        echo "</div>";
                    }
                    

        ?>
    </div>

    <script>
        function deleteFunction(s){
            alert(s)
            chaine = parseInt(s);
            var result = "<?php sup('"+chaine+"'); ?>";
            document.write(result);
        }
    </script>

        <?php //include("../Models/conference.php");

            function sup($s){
                echo "yes";
                echo $s;
                $s = (int)$s;
                //echo $temp;
                echo gettype($s);
                $confer = new conference($s);
                //echo $confer->getId();
                $confer->deleteConference();
            }
        ?>
</body>
</html>