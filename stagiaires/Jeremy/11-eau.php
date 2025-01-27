<?php
// tableau multidimensionnel représentant des données de quelques stagiaires web2025

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
            [
                "un",
                "deux",
                "trois",
            ]
        ],
    ],
    // ... etc
];
// Affichez avec un echo les données de la variable $Webdev_2025 ci dessus pour nous afficher le Github de Mykita

    echo $webdev_2025["WEBDEV04"]["Sites"]["github"];
    echo"<br>";
//Affichage de trois ! tableax indexés dans les tableaux associatifs
    echo $webdev_2025["WEBDEV04"]["Sites"][0][2];

   // $SQL_Reponse = [
      //  0 => "Hello World",
      //  "title" => "Hello World",
      //  1 => "du texte",
      //  "description"=> "du texte",
   // ]

    var_dump($webdev_2025);