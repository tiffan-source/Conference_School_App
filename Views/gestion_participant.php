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


    <title>Document</title>
</head>
<body>
    <?php include("panel.php"); ?>
    <div id = "all_participant">
        <?php foreach($data as $data_elem) { ?>
            
            <div class='participant'>
    
                    <div class='participant-information'>

                        <span class='participant-nom-prenom'> <?= $data_elem->nom_participant . $data_elem->prenom_participant ?></span> 
                        <span class='participant-email'><?= $data_elem->email_partcipant ?></span>
    
                    </div>
    
                    <button class ='button button-delete'>
                        <a href=<?="index.php?action=valider_participant&id_participant=".$data_elem->id_participant?> >Valider</a>
                        <a href=<?="index.php?action=rejeter_participant&id_participant=".$data_elem->id_participant?> >Rejeter</a>
                    </button>
            </div>

        <?php }?>
    </div>   
        
</body>
</html>