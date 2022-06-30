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
    <link rel="stylesheet" href="Style/Modules/create_conference.css">
    <link rel="stylesheet" href="Style/Layouts/create_conference.layout.css">
    <link rel="stylesheet" href="Style/Layouts/panel.layout.css">
    <link rel="stylesheet" href="Style/Modules/panel.css">
    <link rel="stylesheet" href="Style/Modules/alert.css">

    <title>create_conference</title>
</head>
<body>
<div id="content-app">
        <?php include("panel.php") ?>
        
        <div id="create-conference">
            <h1 class="create-publication-title">
                Créer une conférence
            </h1>
            <form method="post" action="index.php?action=create_conference" class="create-conference-form">
                <div class="create-conference-groupefield">
                    <label class="create-conference-label" for="name_conference">Nom de la conférence</label>
                    <input type="text" id="name_conference" class="input" name = "nom_conference">
                    <span class="error" > <?php echo $conf_Name_Err;?></span>
                </div>
                <div class="create-conference-groupefield">
                    <label class="create-conference-label" for="content_conference">Description de la conférence</label>
                    <textarea class="text-area" name="desc_conference" id="" cols="30" rows="6"></textarea>
                    <span class="error" > <?php echo $conf_Desc_Err;?></span>
                </div>
                <div class="create-conference-groupefield">
                    <label class="create-conference-label" for="date_conference">Date de la conference</label>
                    <input type="date" id="date_conference" class="input" name = "date_conference">
                    <span class="error"> <?php echo $conf_Date_Err;?></span>
                </div>
                <div class="create-conference-groupefield">
                    <span class="error"><?= $error ?></span>
                </div>
                <div class="create-conference-groupefield-submit">
                    <input type = "submit" class ="button button-create" value = "Créer">
                </div>
            </form>
            
        </div>
    </div>
</body>
</html>