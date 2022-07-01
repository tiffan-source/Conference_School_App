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
            <?php while($activite = $result_activite->fetch_assoc()) {?>

                <li>
                    <h3>Nom de l'activite : <?=  $activite->nom_activite?></h3>
                    <p>
                    <?=  $activite->description?>
                    </p>
                    <ul>
                        <li> Date </li>
                        <li> Lieu </li>
                        <li> Type </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem laborum illum, labore obcaecati nemo excepturi magni perspiciatis quam autem adipisci!
                    </p>
                </li>

            <?php } ?>
                <li>
                    <h3>Nom de l'activite</h3>
                    <ul>
                        <li> Date </li>
                        <li> Lieu </li>
                        <li> Type </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem laborum illum, labore obcaecati nemo excepturi magni perspiciatis quam autem adipisci!
                    </p>
                </li>

                <li>
                    <h3>Nom de l'activite</h3>
                    <ul>
                        <li> Date </li>
                        <li> Lieu </li>
                        <li> Type </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem laborum illum, labore obcaecati nemo excepturi magni perspiciatis quam autem adipisci!
                    </p>
                </li>

                <li>
                    <h3>Nom de l'activite</h3>
                    <ul>
                        <li> Date </li>
                        <li> Lieu </li>
                        <li> Type </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem laborum illum, labore obcaecati nemo excepturi magni perspiciatis quam autem adipisci!
                    </p>
                </li>
            </ul>
        </div>
    </main>
    <?php include "footer_view.php" ?>
</body>
</html>