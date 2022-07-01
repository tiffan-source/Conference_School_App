<div id="panel" class="panel">
    <div class="panel-option-groupe">
        <h3 class="panel-title">
            <a href="index.php">Acceuil</a>    
        </h3>
        <ul>
            <li class="panel-option-list"><a class="panel-link" href="index.php?action=create_conference">Creer une conference</a></li>
            <li class="panel-option-list"><a class="panel-link" href="index.php?action=detruire_conference&id_conf">Supprimer une conference</a></li>
        </ul>
    </div>
    <div class="panel-option-groupe">
        <h3 class="panel-title">Parametrage</h3>
        <ul>
            <li class="panel-option-list"><a class="panel-link" href="index.php?action=create_activity">Ajouter des activites</a></li>
            <li class="panel-option-list"><a class="panel-link" href="index.php?action=create_publication">Ajouter des publications</a></li>
            <li class="panel-option-list"><a class="panel-link" href="index.php?action=create_appel_candidature">Ajouter Appel a candidature</a></li>
        </ul>
    </div>
    <div class="panel-login-groupe">
        <?php if(isset($check_connection) && $check_connection != false) {?>
            <a href="#">Vous etes connectes</a>
        <?php } else{ ?>
            <button class="button button-secondary">
                <a href="index.php?action=login">Login</a>
            </button>
        <?php }?>
    </div>
</div>