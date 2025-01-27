<?php
//données (venant d'une requêtes SQL, d'une API etc..)
$pages = [
  "acueil" => "Bienvenue sur mon site.",
  "contact" => "Merci de laisser un commentaire ici.",
  "livreor" => "Ceci est mon livre d'or.",
];

// gestion de la route 

// si il lexiste la variable _GET 'p'

if (isset($_GET['p'])) {
  // notre varable $pages prend la clef passée en _GET
  $pages = $pages[$_GET['p']];

  // pas de varianle _GET 'p' => aceuil
} else {
  // notre page est la page d'acceuil
  $pages = $pages["acueil"];
};

//  affichage de la vue 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pages ?></title>
</head>

<body>
  <nav>
    <a href="12-GETB.php">Aceuil</a>
    <a href="12-GETB.php?p=contact">Contact</a>
    <a href="12-GETB.php?p=livreor">Livre d'or</a>
  </nav>
  <h1><?= $pages ?></h1>
  <?php var_dump($_GET) ?>
</body>

</html>