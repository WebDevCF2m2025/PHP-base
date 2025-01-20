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
      [
        "un",
        "deux",
        "trois"
      ]
    ],
  ],
];
echo $webdev_2025["WEBDEV04"]["Sites"]["github"];
echo "<br>";
// affichage de trois ! Tableaux indexés dans les tableaux associatifs
echo $webdev_2025["WEBDEV04"]["Sites"][0][2];
var_dump($webdev_2025);
