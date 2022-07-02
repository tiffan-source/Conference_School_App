<div class="modal_config_conference">
    <div class="modal_config_conference_head">
        <button id="prev">Prev</button>
        <span id="content">Conference Information</span>
        <button id="next">Next</button>
    </div>

    <div class="modal_config_conference_body">
        <div id="info_gene" class="modal_config_conference_info_gene display">
        
            <p>ID de la conference : <?= $data_conference->id_conf ?></p>
            <p>Nom de la conference : <?= $data_conference->nom_conference ?></p>
            <p>Description conference : <?= $data_conference->description ?></p>
            <p>Status : <?= $data_conference->status ?></p>
            <p>Jour de la conf : <?= $data_conference->d_day ?></p>
            <p>Lieu : <?= $data_conference->lieu ?></p>
            <p>Organisateur : <?= $data_conference->organisateur ?></p>
            <p>Last Modif : <?= $data_conference->last_modification_date ?></p>
            <p>Creator : <?= $data_conference->creator ?></p>
            
        </div>

        <div id="info_publication" class="modal_config_conference_publication hidde">
            <?php foreach($data_publication as $data_publication_item){ ?>
                <div>
                    <p>ID de la publication : <?= $data_publication_item->id_publication ?></p>
                    <p>Titre de la publication : <?= $data_publication_item->titre_publication ?></p>
                    <p>Description conference : <?= $data_publication_item->content_publication ?></p>
                </div>
            <?php } ?>
        </div>

        <div id="info_activity" class="modal_config_conference_activite hidde">
            <?php foreach($data_activite as $data_activite_item){ ?>
                <div>
                    <p>ID activite : <?= $data_activite_item->id_activite ?></p>
                    <p>Titre de activite : <?= $data_activite_item->nom_activite ?></p>
                    <p>Description actvite : <?= $data_activite_item->description_activite ?></p>
                    <p>Date actvite : <?= $data_activite_item->date ?></p>
                    <p>Type actvite : <?= $data_activite_item->type ?></p>
                </div>
            <?php } ?>
        </div>

        <div id="info_appel" class="modal_config_conference_appel hidde">
            <?php foreach($data_appel as $data_appel_item){ ?>
                <div>
                    <p>ID de l'appel : <?= $data_appel_item->id_appel ?> </p>
                    <p>Titre de l'appel : <?= $data_appel_item->sujet_appel ?> </p>
                    <p>Contenu : <?= $data_appel_item->contenu ?></p>
                </div>
            <?php } ?>
        </div>
    </div>

    <div>
        <a id="quit" href="index.php">Quit</a>
    </div>

</div>