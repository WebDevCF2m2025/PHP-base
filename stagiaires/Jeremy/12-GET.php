<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <nav>
        <a href="12-GET.php">Accueil</a>
        <a href="?p=1">Page1</a>
        <a href="?p=2">Page2</a>
        <a href="?p=3">Page3</a>
        <a href="?p=4&titre=contact">Contact</a>
        <a href="?p=5&titre=suite&temps=beau&t=25&suite=bientôt">suite</a>

    </nav>
<?php
// affiche le contenu de la variable superglobale $_GET
var_dump($_GET);
?>
</body>
</html>