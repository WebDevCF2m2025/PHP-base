<?php
$webdev_2025 = [
    "WEBDEV01" => [
        "Nom" => "Dahmani",
        "Prenom" => "Reda",
        "Sites" => [
            "SitePerso" => "https://2025.webdev-cf2m.be/reda/",
            "SitePreformation" => "https://2025.webdev-cf2m.be/reda/prefo/",
            "github" => "https://github.com/redasnkrs",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Darry",
        "Prenom" => "Samuel",
        "Sites" => [
            "SitePerso" => "https://2025.webdev-cf2m.be/samuel/",
            "SitePreformation" => "https://2025.webdev-cf2m.be/samuel/prefo/",
            "github" => "https://github.com/Eultype",
        ],
    ],
    "WEBDEV03" => [
        "Nom" => "Farah",
        "Prenom" => "Said",
        "Sites" => [
            "SitePerso" => "https://2025.webdev-cf2m.be/said/",
            "SitePreformation" => "https://2025.webdev-cf2m.be/said/prefo/",
            "github" => "https://github.com/saidweb12",
        ],
    ],
    "WEBDEV04" => [
        "Nom" => "Horban",
        "Prenom" => "Mykyta",
        "Sites" => [
            "SitePerso" => "https://2025.webdev-cf2m.be/mykyta/",
            "SitePreformation" => "https://2025.webdev-cf2m.be/mykyta/prefo/",
            "github" => "https://github.com/NikGorban",
        ],
    ],
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des WebDevs 2025</title>
</head>

<body>
    <a href="12-GET.php?classe=WEBDEV01">Dahmani Reda</a><br>
    <a href="12-GET.php?classe=WEBDEV02">Darry Samuel</a><br>
    <a href="12-GET.php?classe=WEBDEV03">Farah Said</a><br>
    <a href="12-GET.php?classe=WEBDEV04">Horban Mykyta</a><br>
    <br>

    
    <?php $eleve1 = [$webdev_2025["WEBDEV01"]["Nom"], $webdev_2025["WEBDEV01"]["Prenom"]]?>
    <?php $sitePersoEleve1 = [$webdev_2025["WEBDEV01"]["Sites"]["SitePerso"]]?>
    <?php $sitePrefoEleve1 = [$webdev_2025["WEBDEV01"]["Sites"]["SitePreformation"]]?>
    <?php $githubEleve1 = [$webdev_2025["WEBDEV01"]["Sites"]["github"]]?>

    <?php $eleve2 = [$webdev_2025["WEBDEV02"]["Nom"], $webdev_2025["WEBDEV02"]["Prenom"]]?>
    <?php $sitePersoEleve2 = [$webdev_2025["WEBDEV02"]["Sites"]["SitePerso"]]?>
    <?php $sitePrefoEleve2 = [$webdev_2025["WEBDEV02"]["Sites"]["SitePreformation"]]?>
    <?php $githubEleve2 = [$webdev_2025["WEBDEV02"]["Sites"]["github"]]?>

    <?php $eleve3 = [$webdev_2025["WEBDEV03"]["Nom"], $webdev_2025["WEBDEV03"]["Prenom"]]?>
    <?php $sitePersoEleve3 = [$webdev_2025["WEBDEV03"]["Sites"]["SitePerso"]]?>
    <?php $sitePrefoEleve3 = [$webdev_2025["WEBDEV03"]["Sites"]["SitePreformation"]]?>
    <?php $githubEleve3 = [$webdev_2025["WEBDEV03"]["Sites"]["github"]]?>

    <?php $eleve4 = [$webdev_2025["WEBDEV04"]["Nom"], $webdev_2025["WEBDEV04"]["Prenom"]]?>
    <?php $sitePersoEleve4 = [$webdev_2025["WEBDEV04"]["Sites"]["SitePerso"]]?>
    <?php $sitePrefoEleve4 = [$webdev_2025["WEBDEV04"]["Sites"]["SitePreformation"]]?>
    <?php $githubEleve4 = [$webdev_2025["WEBDEV04"]["Sites"]["github"]]?>

    <?php if (isset($_GET['classe']) && $_GET['classe'] === 'WEBDEV01'): ?>
        <h1><?php echo $eleve1[0] . " " . $eleve1[1] ?></h1>
        <h2>Site perso :  <a href="<?php echo $sitePersoEleve1[0] ?>"><?php echo $sitePersoEleve1[0] ?></a> </h2>
        <h2>Site prefo :  <a href="<?php echo $sitePrefoEleve1[0] ?>"><?php echo $sitePrefoEleve1[0] ?></a> </h2>
        <h2>Github :  <a href="<?php echo $githubEleve1[0] ?>"><?php echo $githubEleve1[0] ?></a> </h2>

        <?php elseif (isset($_GET['classe']) && $_GET['classe'] === 'WEBDEV02'): ?>
        <h1><?php echo $eleve2[0] . " " . $eleve2[1] ?></h1>
        <h2>Site perso :  <a href="<?php echo $sitePersoEleve2[0] ?>"><?php echo $sitePersoEleve2[0] ?></a> </h2>
        <h2>Site prefo :  <a href="<?php echo $sitePrefoEleve2[0] ?>"><?php echo $sitePrefoEleve2[0] ?></a> </h2>
        <h2>Github :  <a href="<?php echo $githubEleve2[0] ?>"><?php echo $githubEleve2[0] ?></a> </h2>

        <?php elseif (isset($_GET['classe']) && $_GET['classe'] === 'WEBDEV03'): ?>
        <h1><?php echo $eleve3[0] . " " . $eleve3[1] ?></h1>
        <h2>Site perso :  <a href="<?php echo $sitePersoEleve3[0] ?>"><?php echo $sitePersoEleve3[0] ?></a> </h2>
        <h2>Site prefo :  <a href="<?php echo $sitePrefoEleve3[0] ?>"><?php echo $sitePrefoEleve3[0] ?></a> </h2>
        <h2>Github :  <a href="<?php echo $githubEleve3[0] ?>"><?php echo $githubEleve3[0] ?></a> </h2>
        
        <?php elseif (isset($_GET['classe']) && $_GET['classe'] === 'WEBDEV04'): ?>
        <h1><?php echo $eleve4[0] . " " . $eleve4[1] ?></h1>
        <h2>Site perso :  <a href="<?php echo $sitePersoEleve4[0] ?>"><?php echo $sitePersoEleve4[0] ?></a> </h2>
        <h2>Site prefo :  <a href="<?php echo $sitePrefoEleve4[0] ?>"><?php echo $sitePrefoEleve4[0] ?></a> </h2>
        <h2>Github :  <a href="<?php echo $githubEleve4[0] ?>"><?php echo $githubEleve4[0] ?></a> </h2>
        <?php endif ?>
    </body>

</html>




