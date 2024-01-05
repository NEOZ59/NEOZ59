<?php ob_start() ?>
<link rel="stylesheet" href="style.css">

<section class="sorties">
    <div><p>prochaines sorties</p></div>
    <div><p>FILTRE</p></div>
    <div>
        <a>photo</a><article>Infos</article>
        <a>photo</a><article>Infos</article>
        <a>photo</a><article>Infos</article>
    </div>
    <div>
        <a>photo</a><article>Infos</article>
        <a>photo</a><article>Infos</article>
        <a>photo</a><article>Infos</article>
    </div>
    <div>
        <a>photo</a><article>Infos</article>
        <a>photo</a><article>Infos</article>
        <a>photo</a><article>Infos</article>
    </div>
</section>

<?php
$content = ob_get_clean();
require "template.php";
?>