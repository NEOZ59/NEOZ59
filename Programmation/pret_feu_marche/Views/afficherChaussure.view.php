<?php ob_start() ?>
<?php 
require_once "./Models/Ensembledesclasses.php";
$ModeleManager = new ModeleManager();
$ModeleManager->chargementModele();
$MarqueManager = new MarqueManager();
$MarqueManager->chargementMarque();
?>
<div class="AffChaussure">
    <img class="aff" src="/public/img/<?=$chaussures->UrlImage?>" alt="Photo de la chaussure">
    <article>
        <?=$ModeleManager->getModele()[$chaussures->idModele]->nom . "<br> Marque : " 
        . $MarqueManager->getMarque()[$chaussures->idMarque]->nom . "<br>" 
        . $chaussures->prix . " € <br>" ?>
    </article>
</div>
<?php
$content = ob_get_clean();
require "template.php";
?>