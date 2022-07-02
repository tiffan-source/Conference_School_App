<div class="modal_config_conference">
    <div class="modal_config_conference_head">
        <button id="prev">Prev</button>
        <span id="content" class="modal-config-conference-head-title">Conference Information</span>
        <button id="next">Next</button>
    </div>

    <div class="modal_config_conference_body">
        <div id="info_gene" class="modal_config_conference_info_gene display">
            <ul class="info-gene-ul">
                <li class="info-gene-li"> <strong>ID de la conference :</strong>  <?= $data_conference->id_conf ?></li>
                <li class="info-gene-li"> <strong>Nom de la conference :</strong>  <?= $data_conference->nom_conference ?></li>
                <li class="info-gene-li"> <strong> Status :</strong> <?= $data_conference->status ?></li>
                <li class="info-gene-li"><strong>Jour de la conf :</strong>  <?= $data_conference->d_day ?></li>
                <li class="info-gene-li"><strong> Lieu : </strong><?= $data_conference->lieu ?></li>
                <li class="info-gene-li"><strong> Organisateur :</strong> <?= $data_conference->organisateur ?></li>
                <li class="info-gene-li"><strong> Last Modif :</strong> <?= $data_conference->last_modification_date ?></li>
                <li class="info-gene-li"><strong> Creator :</strong> <?= $data_conference->creator ?></li>
                <li class="info-gene-li"> <strong>Description conference : </strong> <br> <?= $data_conference->description ?></li>
            </ul>            
        </div>

        <div id="info_publication" class="modal_config_conference_publication hidde">
            <ul class="info-publication-ul">    
                <?php foreach($data_publication as $data_publication_item){ ?>
                <li class="info-publication-li">
                    <div class="info-publication-li-head">
                        <span> <strong>Id : </strong>#<?= $data_publication_item->id_publication ?> </span>
                        <span> <strong> Titre : </strong> <?= $data_publication_item->titre_publication ?> </span>
                    </div>
                    <p>
                        <?= $data_publication_item->content_publication ?>
                    </p>
                </li>
                <?php } ?>
            </ul>
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