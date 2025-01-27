<?php
// données (venant d'une requête SQl, d'une API etc...)
$pages = [
    "Accueil" => "Bienvenue sur mon site",
    "Contact" => "Merci de laisser un commentaire ici",
    "LivreOr" => "Mon livre d'or",
];

// gestion de la route

// si il existe la variable get "p"
if(isset($_GET["p"])){
// notre variabe $page prend la clef passée en get
    $page = $pages[$_GET["p"]];
    
// pas de variabkes get p => accueil
}else {
    $page = $pages["Accueil"];
}



// if(empty($_GET)){ // si pas de variables get (vide) + notre page est la page d'accueil
//     $page = $pages ["Accueil"];
// // sinon si il existe une variable get nommée "p"
// } elseif(isset($_GET["p"])){
//     $page = $pages[$_GET["p"]];
// }
// affichage de la vue
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php echo $pages["Accueil"];?></title> -->
    <!-- <title><?php echo $pages;?></title> -->
</head>
<body>
    <!-- <h1><?= $pages["Accueil"]?></h1> -->
    <!-- <h1><?= $pages?></h1> -->
    <nav>
        <a href="JM-12-B.php">Accueil</a>
        <a href="JM-12-B.php?p=Contact">Contact</a>
        <a href="JM-12-B.php?p=LivreOr">Livre d'or</a>
    </nav>
    <?php var_dump($_GET) ?>
</body>
</html>

