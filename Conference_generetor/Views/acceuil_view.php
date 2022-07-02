<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Modules/style.css">
    <title>Document</title>

</head>
<body>
    <?php include("header_view.php") ?>

    <h1><?= $data["nom_conf"] ?></h1>
    <img src="" alt="">
    
    <p>
        <?= $data["description"] ?>        
    </p>
    <h1>Organisateurs</h1>
    <p>
        <?= $data["organisateurs"] ?>
    </p>
  
    <?php include("footer_view.php") ?>

</body>
</html>