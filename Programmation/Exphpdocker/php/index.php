<?php ob_start() ?>

<link rel="stylesheet" href="style.css">
<form action="#" method="post">
    <button name="fr"><img src="./img/france.png"></button>
    <button name="en"><img src="./img/royaume-uni.png"></button>
    <button><img src="./img/espagne.png"></button>
</form>

<?php 
    if (isset($_POST["fr"])){
        echo "<p class='FR'>" . "Bienvenue sur mon site" . "</p>" ;
    }
    if (isset($_POST["en"])){
        echo "<p class='FR'>" . "Welcome to my website" . "</p>" ;
    }
?>

<?php
$content = ob_get_clean();
require "template.php";
?>