<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("header_view.php") ?>

    <h1><?= $data["nom_conf"] ?></h1>
    <img src="" alt="">
    <!-- <h1>What is THE CONFERENCE NAME #2030 ?</h1> -->
    <p>
        <?= $data["description"] ?>        
    </p>
    <h1>Organisateurs</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias doloribus iste quo, perspiciatis necessitatibus architecto fuga blanditiis enim exercitationem recusandae. Officiis itaque facilis animi tenetur.
    </p>
    <!-- <table class="sponsors">
        <tr>
            <td class="sponsor">
                    <img src="assets/kitten1.jpg" alt="First Sponsor Name">
            </td>
            <td class="sponsor">                
                    <img src="assets/kitten2.jpg" alt="Second Sponsor Name" style="width: 80%">                
            </td>
            <td class="sponsor">                
                    <img src="assets/kitten3.jpg" alt="Third Sponsor Name">                
            </td>
        </tr>
    </table> -->
    <?php include("footer_view.php") ?>

</body>
</html>