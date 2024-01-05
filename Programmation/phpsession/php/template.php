<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>Accueil</li>
                <li>Traitement</li>
            </ul>
        </nav>
    </header>
    <section>
        <h1><?= $titre ?></h1>
        <?= $content ?>
    </section>
</body>
</html>