<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="Style/navbar.css"> -->
    
</head>

<body>

    <?php include "header_view.php"?>
    
    <!-- <div class = "banner">
        <img src="img/banner.jpg" alt="banner conference" class = "img_center">
        <div class = "text_on_banner">
            <h1>California, USA</h3>
        </div>
    </div> -->
    
    <main>
        <div>
            <h2> Au cours de cette conference on aura :</h2>
            <ul>
                <?php foreach($data as $data_cont){ ?>
                
                <li>
                    <h3>Nom de l'activite</h3>
                    <ul>
                        <li> <?= $data_cont["date"] ?> </li>
                        <!-- <li> <?= $data_cont["lieu"] ?> </li> -->
                        <li> <?= $data_cont["type"] ?> </li>
                    </ul>
                    <p>
                        <?= $data_cont["description"] ?>
                    </p>
                </li>
                <?php } ?>
            </ul>
        </div>
    </main>
    <?php include "footer_view.php" ?>
</body>
</html>