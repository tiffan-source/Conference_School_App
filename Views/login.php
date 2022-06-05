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
    <title>Document</title>
</head>
<body>
    <div id="content-app">

        <?php include("panel.php") ?>

        <div id="login">
            <h1 class="title-login">Bienuvenue sur votre plateforme</h1>

            <div class="login-box-input">
                <label class="login-box-input-label" for="user">Nom d'utilisateur</label>
                <input class="input" type="text" id="user">
            </div>

            <div class="login-box-input">
                <label class="login-box-input-label" for="password">Mot de passe</label>
                <input class="input" type="password" id="password">
            </div>

            <div>
                <input type="checkbox" id="remember">
                
                <label class="login-box-input-label" for="remember">Se rappeler de moi</label>
            </div>

            <input type="submit" class="button button-login" value="Login">
        </div>
    </div>
</body>
</html>