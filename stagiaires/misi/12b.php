<?php
// données (venant d'une requête SQL, d'une API etc...)
$pages = [
    "accueil" => "Bienvenue sur mon site",
    "contact" => "Merci de laisser un commentaire ici",
    "livreor" => "Ceci est mon livre d'or",
];


// gestion de la route
 //si il existe la variables get "p"
 if(isset($_GET['p'])){
    // notre variable $page prends la clé passé dans p
    $page= $pages[$_GET['p']];
// pas de variable get p => accueil
}else{
// notre page est la page d'accueil
    $page = $pages["accueil"];
}



// affichage de la valeur
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page;?></title>
</head>
<body>
    <nav>
        <a href="12b.php">Accueil</a>
        <a href="12b.php?p=contact">Contact</a>
        <a href="12b.php?p=livreor">Livre d'or</a>
    </nav>
    <h1><?=$pages["accueil"]; ?></h1>
    <?php var_dump($_GET); ?>
</body>
</html>