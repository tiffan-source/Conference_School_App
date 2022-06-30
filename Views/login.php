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
    <link rel="stylesheet" href="Style/Modules/login.css">
    <link rel="stylesheet" href="Style/Layouts/login.layouts.css">
    <link rel="stylesheet" href="Style/Modules/input.css">
    <link rel="stylesheet" href="Style/Modules/button.css">
    <link rel="stylesheet" href="Style/Layouts/panel.layout.css">
    <link rel="stylesheet" href="Style/Modules/panel.css">
    <link rel="stylesheet" href="Style/Modules/button.css">

    <title>Document</title>
</head>
<body>
    <div id="content-app">

        <?php include("panel.php") ?>

        <form id="login" action="index.php?action=login" method="POST">
            <h1 class="title-login">Bienuvenue sur votre plateforme</h1>

            <div class="login-box-input">
                <label class="login-box-input-label" for="user">Nom d'utilisateur</label>
                <input class="input" type="text" id="user" name="user" require>
            </div>

            <div class="login-box-input">
                <label class="login-box-input-label" for="password">Mot de passe</label>
                <input class="input" type="password" id="password" name="password" require>
            </div>

            <div>
                <input type="checkbox" id="remember">
                
                <label class="login-box-input-label" for="remember">Se rappeler de moi</label>
            </div>

            <div class="login-error">
                <?php if(isset($error) && !empty($error)) {?>
                <span class="error">*<?= $error ?></span>
                <?php } ?>
            </div>

            <button type="submit" class="button button-login" >Login</button>
</form>
    </div>
</body>
</html>