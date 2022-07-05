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
            <a href= <?= 'index.php?action=generation&id='.$data_conference->id_conf ?> > Generetaion du site </a>       
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
            <ul class = "info-activite-ul">

                <?php foreach($data_activite as $data_activite_item){ ?>
                            <li class = "info-activite-li">
                                <div class = "info-activite-li-head">
                                    <span> <strong>ID</strong>: # <?= $data_activite_item->id_activite ?></span>
                                    <span><strong>Titre</strong>: <?= $data_activite_item->nom_activite ?> </span>
                                    <span> <strong>Date</strong>: <?= $data_activite_item->date ?></span>
                                    <span><strong>Type</strong> : <?= $data_activite_item->type ?></span>
                                </div>
                                <p>
                                    <?= $data_activite_item->description_activite ?>
                                </p>
                            </li>            
                <?php } ?>

            </ul>
        </div>
        
        <div id = "info_appel" class = "modal_config_conference_activite hidde">
            <div id="info_appel" class="modal_config_conference_appel">
                <ul class = "info-appel-ul">
                    <?php foreach($data_appel as $data_appel_item){?>
                        <li class = "info-appel-li">
                            <div class = "info-appel-li-head">
                                <span><strong>ID </strong>: #<?= $data_appel_item->id_appel ?> </span>
                                <span><strong>Titre </strong>: <?= $data_appel_item->sujet_appel ?> </span>
                                <span><strong>Contenu </strong>: <?= $data_appel_item->contenu ?></span>
                            </div>     
                        </li>
                    <?php } ?>
                </ul>    
            </div>
        </div>
    </div>

    <div>
        <a id="quit" href="index.php">Quit</a>
    </div>

</div>