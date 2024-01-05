<?php ob_start() ?>

<section class="accueil">
    <div>
        <div><p>Les prochaines sorties</p><a href="prochaines_sorties.php">Voir plus >></a></div>
        <div><a></a><a></a></div>
        <div><a></a><a></a></div>
    </div>
    <div>
        <div><p>Les nouveautés</p><a href="nouveautes.php">Voir plus >></a></div>
        <div><a></a><a></a></div>
        <div><a></a><a></a></div>
    </div>
</section>

<?php
$content = ob_get_clean();
require "template.php";
?>