<DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
         <title>Inscription</title>
    </head>
    <body>
        <form action="index.php?action=inscription_view" method="post">
            <label for="lastname">Nom</label>
            <input name = "lastname" type="text"><br>
            <span> <?php echo $firstname_Err;?></span><br>

            <label for="firstname">Prénoms</label><br>
            <input name = "firstname" type="text"><br>
            <span> <?php echo $lastname_Err;?></span>

            <label for="email">Email</label>
            <input name = "email" type="email"><br>
            <span> <?php echo $email_Err;?></span>

            <input type="button" value="Demander Inscription"><br>
        </form>
    </body>
</html>