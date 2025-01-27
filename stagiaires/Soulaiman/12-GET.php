<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Variables</title>
</head>
<body>
    <h1>Test des variables GET</h1>
     <ul>
        <li><a href="12-GET.php?nom=chair">Nom = chair</a></li>
        <li><a href="12-GET.php?prenom=soulaiman">Prénom = soulaiman</a></li>
        <li><a href="12-GET.php?ville=bruxelle">Ville = bruxelle</a></li>
        <li><a href="12-GET.php?age=35">Âge = 35</a></li>
     </ul>
   <h2>Affichage des variables GET :</h2>
     <p>
        <?php
        if (isset($_GET['nom'])) {
            echo "Nom : " . htmlspecialchars($_GET['nom']) . "<br>";
        }
        if (isset($_GET['prenom'])) {
            echo "Prénom : " . htmlspecialchars($_GET['prenom']) . "<br>";
        }
        if (isset($_GET['ville'])) {
            echo "Ville : " . htmlspecialchars($_GET['ville']) . "<br>";
        }
        if (isset($_GET['age'])) {
            echo "Âge : " . htmlspecialchars($_GET['age']) . "<br>";
        }
        ?>
     </p>
</body>
</html>