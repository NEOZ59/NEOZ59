<?php ob_start() ?>
<?php require_once "./Models/Ensembledesclasses.php";
require_once "./Controller/ChaussureController.php";
$ModeleManager = new ModeleManager();
$ModeleManager->chargementModele();
$MarqueManager = new MarqueManager();
$MarqueManager->chargementMarque();
?>

<section class="articles">
    <div><p>TOUTES NOS CHAUSSURES</p></div>
    <div><p>FILTRE</p></div>
    <?php for ($i=0;$i<ceil(count($chaussures)/2);$i++):?>
        <div>
            <a href="articles/c/<?=$chaussures[2*$i]->idChaussure?>"><img class="aff" src="public/img/<?=$chaussures[2*$i]->UrlImage?>" alt="Photo de la chaussure"></a>
            <article>
                <?=$ModeleManager->getModele()[$chaussures[2*$i]->idModele]->nom . "<br> Marque : " 
                . $MarqueManager->getMarque()[$chaussures[2*$i]->idMarque]->nom . "<br>" 
                . $chaussures[2*$i]->prix . " € <br>" ?>
            </article>
            <a href="articles/c/<?=$chaussures[2*$i+1]->idChaussure?>"><img class="aff" src="public/img/<?=$chaussures[2*$i+1]->UrlImage?>" alt="Photo de la chaussure"></a>
            <article>
                <?=$ModeleManager->getModele()[$chaussures[2*$i+1]->idModele]->nom . "<br> Marque : " 
                . $MarqueManager->getMarque()[$chaussures[2*$i+1]->idMarque]->nom . "<br>" 
                . $chaussures[2*$i]->prix . " € <br>" ?></article>
        </div>
    <?php endfor;?>
</section>

<?php
$content = ob_get_clean();
require "template.php";
?>