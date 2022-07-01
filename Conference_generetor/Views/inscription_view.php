<DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
         <title>Inscription</title>
    </head>
    <body>
        <?php include("header_view.php") ?>
        <fieldset>
            <legend> <strong>Enroll</strong> </legend>
            <label for="last name">Nom</label>
            <input type="text" name="Nom" >
            <br>
            <label for="first name">Prenoms</label>
            <input type="text" name="Prenom" >
            <br>
            <label for="password">Mot de passe</label>
            <input type="password" name="Age" >
            <br>
            <label for="Email">Email</label>
            <input type="email" name="" >
            <br>
            <label for="ville_provenance">Ville de provenance</label>
            <input type="text" name="" >
            <br>
            <button>Submit</button>
        </fieldset>
        <?php include("footer_view.php") ?>

    </body>
</html>