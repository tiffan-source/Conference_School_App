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
    <link rel="stylesheet" href="Style/Layouts/panel.layout.css">
    <link rel="stylesheet" href="Style/Modules/panel.css">

    <title>delete_conference</title>
</head>
<body>
    <div id="content-app">


        <?php include("panel.php") ?>

        <div id="supprimer">
            <h1 class="title-delete">Supprimer une conférence</h1>

	    <div>
                <?php foreach ($data as $d_conf){ ?>
                    <div class='delete'>

                    <div class='delete-information'>

                        <span class='delete-information-conference'> <?= $d_conf->nom_conference ?> </span> 

                        <span class='delete-information-modification'>Modifiée le <?= $d_conf->last_modification_date ?></span>

                    </div>

                    <button class ='button button-delete'>
		                <a href=<?="index.php?action=detruire_conference&id_conf=".$d_conf->id_conf ?> >Supprimer</a>
		            </button>
                    </div>
                <?php } ?>

        </div>
    </div>

</body>
</html>
