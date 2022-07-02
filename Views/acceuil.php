<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Bases/reset.css">
    <link rel="stylesheet" href="Style/Bases/base.css">
    <link rel="stylesheet" href="Style/Modules/title.css">
    <link rel="stylesheet" href="Style/Modules/input.css">
    <link rel="stylesheet" href="Style/Modules/links.css">
    <link rel="stylesheet" href="Style/Modules/acceuil.css">
    <link rel="stylesheet" href="Style/Layouts/acceuil.layouts.css">
    <link rel="stylesheet" href="Style/Layouts/panel.layout.css">
    <link rel="stylesheet" href="Style/Modules/panel.css">
    <link rel="stylesheet" href="Style/Modules/button.css">
    <link rel="stylesheet" href="Style/Layouts/modal_conference.layout.css">
    <link rel="stylesheet" href="Style/Modules/modal_conference.css">
    <link rel="stylesheet" href="Style/Modules/info_publication.css">
    <link rel="stylesheet" href="Style/Modules/info_conference.css">
    <link rel="stylesheet" href="Style/Modules/info_activite.css">
    <link rel="stylesheet" href="Style/Modules/info_appel.css">

    <title>Document</title>
</head>
<body>
    <div id="content-app">
        <?php include("panel.php") ?>
        
        <div id="acceuil">
            <div class="acceuil-head">
                <h1 class="acceuil-title">Acceuil</h1>
                <input id = "search" type="search" class="input" placeholder="Search" onkeyup = "myFunction()">
                                
            </div>
            <div class="acceuil-conference">
                <ul class="acceuil-list-conference">
                    <?php foreach($data as $d_conf){ ?>

                    <li  class="acceuil-list-conference-element">
                        <div class="acceuil-list-conference-title">
                            <span class="acceuil-list-conference-name" ><?= $d_conf->nom_conference ?></span>
                            <span class="acceuil-list-conference-lastupdate"><?= $d_conf->d_day?></span>
                        </div>
                        <span class="acceuil-list-conference-status"  ><?=  $d_conf->status?></span>
                        <span class="acceuil-list-conference-creator"  ><?=  $d_conf->creator ?></span>
                        <a id="more_conf" href=<?='index.php?id='.$d_conf->id_conf ?> class="acceuil-list-conference-showmore">Voir plus</a>
                    </li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <?php if($active_voir_plus) {?>
    <div id="modal-config-conference" class="modal-config-conference modal-config-conference_active">
        <?php include("modif_conference.php") ?>
    </div>
    <?php } ?>
</body>
<script src="Script/modal_conference.js"></script>
</html>