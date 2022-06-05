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

    <title>Document</title>
</head>
<body>
    <div id="content-app">


        <?php include("panel.php") ?>

        <div id="supprimer">
            <h1 class="title-delete">Supprimer une conférence</h1>
        <div class="delete">
           <div class="delete-information">
               <span class="delete-information-conference">Conférence 1</span> <br/>
               <span class="delete-information-modification">Modifié le 15/06/2022</span>
           </div>
               <button class ="button button-delete">Supprimer</button>
         </div>
            
         <div class="delete">
           <div class="delete-information">
               <span class="delete-information-conference">Conférence 1</span> <br/>
               <span class="delete-information-modification">Modifié le 15/06/2022</span>
           </div>
               <button class ="button button-delete">Supprimer</button>
         </div>
        </div>
    </div>
</body>
</html>