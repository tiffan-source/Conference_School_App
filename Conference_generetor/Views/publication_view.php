<DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <title>Publication</title>
    </head>
    <body>
        <?php include("header_view.php") ?>
        <div>
            <h3><?= $data["titre"] ?></h3>
            <p> <?= $data["contenu"] ?>
        </div>
        <?php include("footer_view.php")?>
    </body>
</html>