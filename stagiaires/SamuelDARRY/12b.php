<?php
// Données (venant d'une requête SQL, d'une API etc...)
$pages = [
    "accueil" => "Bienvenue sur mon site",
    "contact" => "Merci de aisser un commentaire ici",
    "livreor" => "Ceci est mon livre d'or"
];

// Gestion de la route

// S'il existe la variable get 'p'
if(isset($_GET['p'])){
    // Notre variable $page prend la clef passée en get
    $page = $pages[$_GET['p']];

// Pas de variable get p => accueil 
}else{
    // Notre page est la page d'accueil
    $page = $pages["accueil"];
}

// Affichage de la vue
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page; ?></title>
</head>
<body>
<nav>
    <a href="12b.php">Accueil</a>
    <a href="12b.php?p=contact">Contact</a>
    <a href="12b.php?p=livreor">Livre d'or</a>
</nav>
    <h1><?=$page ?></h1>
    <?php var_dump($_GET); ?>
</body>
</html>