<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable $_GET</title>
</head>
<body>
<h1>Test des variables GET</h1>
    <ul>
        <li><a href="12-GET.php">Accueil</a></li>
        <li><a href="?p=1">Page 1</a></li>
        <li><a href="?p=2">Page 2</a></li>
        <li><a href="?p=3">Page 3</a></li>
        <li><a href="?p=4&title=contact">Contact</a></li>
        <li><a href="?p=5&title=suite&temps=beau&t=25&suite=bientôt">Contact</a></li>
    </ul>
<?php
// affiche le contenu de la variable superglobale $_GET

var_dump($_GET);
?>
</body>
</html>