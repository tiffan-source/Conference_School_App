<DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
         <title>Inscription</title>
    </head>
    <body>
        <?php include("header_view.php") ?>
        <form action="index.php?action=inscription_view" method="post">
            <div>
                <label for="lastname">Nom</label><br>
                <input name = "lastname" type="text"><br>
                <span> <?php echo $firstname_Err;?></span><br>
            </div>

            <div>
                <label for="firstname">Prénoms</label><br>
                <input name = "firstname" type="text"><br>
                <span> <?php echo $lastname_Err;?></span>
            </div>

            <div>
                <label for="email">Email</label><br>
                <input name = "email" type="email"><br>
                <span> <?php echo $email_Err;?></span>
            </div>

            <input type="submit" value="Demander Inscription"><br>
        </form>
        <?php include("footer_view.php") ?>
    </body>
</html>