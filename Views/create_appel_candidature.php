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
    <link rel="stylesheet" href="Style/Modules/input.css">
    <link rel="stylesheet" href="Style/Modules/button.css">
    <link rel="stylesheet" href="Style/Layouts/panel.layout.css">
    <link rel="stylesheet" href="Style/Modules/panel.css">
    <link rel="stylesheet" href="Style/Layouts/create_appel.layouts.css">
    <link rel="stylesheet" href="Style/Modules/create_appel.css">
    <title>create appel</title>
</head>
<body>
    <div id="content-app">
        <?php include("panel.php") ?>
        
        <div id="create-appel">
            <h1 class="create-appel-title">
                Manager d'appel à candidature
            </h1>

            <form method="post" action="index.php?action=create_appel_candidature" class="create-appel-form">
                <div class="create-appel-groupefield">
                    <label class="create-appel-label" for="name_publication">Conference</label>
                    <select name="id_selected" id="id_selected">
                        <option va-lue="empty"></option>
                        <?php foreach ($data as $d_conf){ ?>
                                <option value = <?= $d_conf->id_conf?>><?=$d_conf->nom_conference." #".$d_conf->id_conf ?></option>
                        <?php }?>
                    </select>
                    <span class="error" style = "color : red;"> <?php echo $conf_Id_Err;?></span>
                </div>
            
                <div class="create-appel-groupefield">
                    <label class="create-appel-label" for="name_publication">Nom de l'appel</label>
                    <input name = "nom_appel" type="text" id="name_publication" class="input">
                    <span class="error"> <?php echo $appel_name_Err ;?></span>
                </div>

                <div class="create-appel-groupefield">
                    <label class="create-appel-label" for="content_publication">Description de l'appel</label>
                    <textarea class="text-area" name="content_appel" id="" cols="10" rows="7"></textarea>
                    <span class="error"> <?php echo $appel_description_Err;?></span>
                </div>

                <div class="create-appel-groupefield">
                    <label class="create-appel-label" for="preo_maj">Préoccupation majeure</label>
                    <input name = "preo_maj" type="text" id="name_publication" class="input">
                    <span class="error"> <?= $appel_preo_maj_Err ?></span>
                </div>

                <div class="create-appel-submit">
                    <input type = "submit" class ="button button-create" value = "Créer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>