<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Bases/reset.css">
    <link rel="stylesheet" href="Style/Bases/base.css">
    <link rel="stylesheet" href="Style/Modules/links.css">
    <link rel="stylesheet" href="Style/Modules/create_publication.css">
    <link rel="stylesheet" href="Style/Modules/title.css">
    <link rel="stylesheet" href="Style/Modules/input.css">
    <link rel="stylesheet" href="Style/Modules/button.css">
    <link rel="stylesheet" href="Style/Layouts/create_publication.layout.css">
    <link rel="stylesheet" href="Style/Layouts/panel.layout.css">
    <link rel="stylesheet" href="Style/Modules/panel.css">

    <title>Document</title>
</head>
<body>
    <div id="content-app">
        <?php include("panel.php") ?>
        
        <div id="create-publication">
            <h1 class="create-publication-title">
                Manager de publication
            </h1>

            <form method="post" action="index.php?action=create_publication" class="create-publication-form">
                <div class="create-publication-groupefield">
                    <label class="create-publication-label" for="name_publication">Conference</label>
                    <select name="id_selected" id="id_selected">
                        <option value="empty"></option>
                        <?php foreach ($data as $d_conf){ ?>
                                <option value = <?= $d_conf->id_conf?>><?=$d_conf->nom_conference." #".$d_conf->id_conf ?></option>
                        <?php }?>
                    </select>
                    <span class="error" style = "color : red;"> <?php echo $conf_Id_Err;?></span>
                </div>
            
                <div class="create-publication-groupefield">
                    <label class="create-publication-label" for="name_publication">Nom de la publication</label>
                    <input name = "nom_pub" type="text" id="name_publication" class="input">
                    <span class="error"> <?php echo $pub_Title_Err ;?></span>
                </div>

                <div class="create-publication-groupefield">
                    <label class="create-publication-label" for="content_publication">Contenue de la publication</label>
                    <textarea class="text-area" name="content_pub" id="" cols="10" rows="7"></textarea>
                    <span class="error"> <?php echo $pub_Content_Err;?></span>
                </div>
                <div class="create-publication-submit">
                    <input type = "submit" class ="button button-create" value = "Créer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>