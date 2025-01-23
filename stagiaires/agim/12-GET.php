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
    <?php if (isset($_GET['classe']) && $_GET['classe'] === 'WEBDEV01'): ?>
        <?php $firstStudent = $webdev_2025['WEBDEV01']['Nom'] . " " . $webdev_2025['WEBDEV01']['Prenom'] ?>
        <h1><?php echo $firstStudent ?><br></h1>
        <h2>Mes sites : <br></h2>
        <?php $websites = $webdev_2025['WEBDEV01']['Sites'] ?>
        <?php foreach ($websites as $key => $website): ?>
            <p> <?php echo $key . " : " ?> <a href="<?php echo $website ?>"><?php echo $website ?></a></p>
        <?php endforeach ?>
    <?php endif ?>
</body>

</html>