<?php ob_start() ?>

<link rel="stylesheet" href="style.css">

<?php
    if (empty($_SESSION["nom"]) or empty($_SESSION["age"])){
        echo "<form method='post'>
        <label for='name'>Nom :<label><br>
        <input type='text' id='name' name='nom'><br>
        <label for='age'>Age :<label><br>
        <input type='number' id='age' name='age'>
        </form>";
    }
?>

<?php
$content = ob_get_clean();
require "template.php";
?>