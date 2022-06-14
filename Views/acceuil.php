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

    <title>Document</title>
</head>
<body>
    <div id="content-app">
        <?php include("panel.php") ?>

        <div id="acceuil">
            <div class="acceuil-head">
                <h1 class="acceuil-title">Acceuil</h1>
                <input type="search" class="input" placeholder="Search">
            </div>
            <div class="acceuil-conference">
                <ul class="acceuil-list-conference">

                    <?php foreach($data as $d_conf){ ?>

                    <li  class="acceuil-list-conference-element">
                        <div class="acceuil-list-conference-title">
                            <span class="acceuil-list-conference-name"><?= $d_conf->nom_conference ?></span>
                            <span class="acceuil-list-conference-lastupdate">Last update date</span>
                        </div>
                        <span class="acceuil-list-conference-status">Status</span>
                        <span class="acceuil-list-conference-creator">Creator</span>
                        <a href="#" class="acceuil-list-conference-showmore">Voir plus</a>
                    </li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>