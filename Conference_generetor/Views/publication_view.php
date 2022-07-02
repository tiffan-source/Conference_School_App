<DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <title>Publication</title>
    </head>
    <body>
        <?php include("header_view.php") ?>
        <?php foreach($data as $data_elem){ ?>
            <div>
                <h3><?= $data_elem["titre"] ?></h3>
                <p> <?= $data_elem["contenu"] ?></p>
            </div>
        <?php } ?>
        <?php include("footer_view.php")?>
    </body>
</html>