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
            <ul>           
                <?php foreach($data_publication as $data_publication_item){ ?>
                    <div>
                        <li>
                            <p>ID de la publication : <?= $data_publication_item->id_publication ?></p>
                            <p>Titre de la publication : <?= $data_publication_item->titre_publication ?></p>
                            <p>Description conference : <?= $data_publication_item->content_publication ?></p>
                        </li>
                        
                    </div>
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
            <div id="info_appel" class="modal_config_conference_appel hidde">
                <ul class = "info-appel-ul">
                    <?php foreach($data_appel as $data_appel_item){?>
                        <li class = "info-appel-li">
                            <div class = "info-appel-li-head">
                            <?php echo var_dump($data_appel)?>
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