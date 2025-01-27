<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
    <a href="12-GET.php">accueil</a>
    <a href="?p=1">page1</a>
    <a href="?p=2">page2</a>
    <a href="?p=3">page3</a>
    <a href="?p=4&titre=conctat">conctat</a>
    <a href="?p=4&titre=suite&temps=beau&t=25">suite</a>
</nav>
    
<?php
// affiche le contenu de la variable superglobale $_GET
var_dump($_GET);
?>
    
</body>
</html>

