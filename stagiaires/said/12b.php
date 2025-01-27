<?php

//donnes(venant d une requete SQL, d 'une API etc ....)
$pages=[
    "accueil"=>"Bienvenuesue mon site",
    "contact"=>"Merci de laisser un commentaire ici ",
    "livreor"=>"Ceci est un livre d'or",
];

//gestion de la route
// si il existe la variable 'p'

if(isset($_GET["p"])){//si pas de variables get (vide )+
    //notre page et la page d'accueil
$page= $pages[$_GET["p"]];
    //sinon si il existe un variable get nomme 'contact

}else{
    //on recupere la valeur du meme nom
    $page =$pages["accueil"];
}





//affiche de la vue 

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
        <a href="12b.php">accueil</a>
        <a href="12b.php?p=contact">contact</a>
        <a href="12b.php?p=livreor">livreor</a>

    </nav>

    <h1><?=$pages["accueil"]?></h1>
    <?php var_dump($_GET); ?>
    
</body>
</html>