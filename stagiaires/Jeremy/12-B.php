<?php
//Données (venant d'une requête SQL, d'une API etc...)
$pages = [
    "Accueil" => "Bienvenue sur mon site",
    "Contact" => "Merci de laisser un commentaire ici",
    "Livreor" => "Ceci est mon livre d'or",
];

//gestion de la route

//Si il existe la variable GEt "p"
if(isset($_GET["p"])){
    //Notre variable $pages prend la clef passée en GET
    $pages = $pages[$_GET["p"]];
    
}else{
    //Notre page est la page d'accueil
    $pages = $pages["Accueil"];

}

//affichage de la vue
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pages;?></title>
</head>
<body>
    <nav>
        <a href="12-B.php">Accueil</a>
        <a href="12-B.php?p=Contact">Contact</a>
        <a href="12-B.php?p=Livreor">Livre d'or</a>
        
    </nav>
    <h1><?=$pages?></h1>
    <?php var_dump($_GET);?>
</body>
</html>