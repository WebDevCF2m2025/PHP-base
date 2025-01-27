<?php
//données (venant d'une requete SQL, d'une API etc... )
$pages = [
    "accueil" => "Bienvenue sur mon site", 
    "contact" => "Merci de laisser un commentaire ici",
    "livreor" => "Ceci est mon livre d,or"
];

/*
if(empty($_GET)){
    $page = $pages["accueil"];
}elseif(isset($_GET['p'])){
    $page = $_GET['p'];
}
*/

if(isset($_GET['p'])){
    $page = $pages[$_GET['p']];
}else{
    $page = $pages["accueil"];
}

// gestion de la route


// afichage de la vue
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page; ?></title>
</head>
<body>
    <nav><a href="12b.php">Accueil</a>
    <a href="12b.php?p=contact">Contact</a>
    <a href="12b.?p=livreor">Livre d'or</a>
    </nav>
    <h1><?=$pages['accueil']?></h1>
    <?php var_dump($_GET); ?>
</body>
</html>