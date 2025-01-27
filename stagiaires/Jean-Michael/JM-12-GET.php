<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="JM-12-GET.php">Accueil</a>
        <a href="?p=1">PageUne</a>
        <a href="?p=2">PageDeux</a>
        <a href="?p=3">PageTrois</a>
        <a href="?p=4&titre=contact">Contact</a>
        <a href="?p=5&titre=contacts&temps=pasmal&t=25">Contacts</a>
    </nav>
<?php
// affiche le contenu de la variable superglobale $_GET
var_dump($_GET);
?>
</body>
</html>