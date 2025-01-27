<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>test</title>
    </head>
    <body>
        <nav>
            <a href="12-GET.php">Accueil</a>
            <a href="?p=1">Page 1</a>
            <a href="?p=2">Page 2</a>
            <a href="?p=4&titre=contact">Contact</a>
            <a href="?p=5&titre=suite&temps=beu&t=25&suite=bientot">Contact2</a>
        </nav>
        <?php
        // affiche le contenu de la variable superglobale $_GET
        var_dump($_GET);
        ?>
    </body>
</html>