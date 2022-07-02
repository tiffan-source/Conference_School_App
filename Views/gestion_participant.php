<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="Style/Modules/button.css">
    <link rel="stylesheet" href="Style/Bases/base.css">
    <link rel="stylesheet" href="Style/Bases/reset.css">
    <link rel="stylesheet" href="Style/Modules/links.css">
    <link rel="stylesheet" href="Style/Modules/title.css">
    <link rel="stylesheet" href="Style/Layouts/panel.layout.css">
    <link rel="stylesheet" href="Style/Modules/panel.css">
    <link rel="stylesheet" href="Style/Modules/alert.css">
    <link rel="stylesheet" href="Style/Modules/gestion_participant.css">

    <title>Document</title>
</head>
<body>
   
    <div id = "content-app">

        <?php include("panel.php"); ?>
    
        <div id = "participant">

        
            <?php foreach($data as $data_elem) { ?>
                
                <div class='participant'>
        
                        <div class='participant-information'>

                            <span class='participant-nom-prenom'> <?= $data_elem->nom_participant ."   ". $data_elem->prenom_participant ?></span> <br>
                            <span class='participant-email'><?= $data_elem->email_participant  ?></span>
        
                        </div>
                    <div>

                    
                        <button class ='button button-create'>
                            <a href=<?='index.php?action=valider_participant&id_participant='.$data_elem->id_participant?> >Valider</a>
                        </button>
                        <button class ='button button-delete '>
                            <a href=<?='index.php?action=rejeter_participant&id_participant='.$data_elem->id_participant?> >Rejeter</a>
                        </button>
                    </div>        
                </div>

            <?php }?>
        </div>
    </div>   
        
</body>
</html>