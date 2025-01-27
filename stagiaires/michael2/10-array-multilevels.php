<?php
$students= [
    "classe1" => [
        "students" => [
            
            [
                "prenom" => "Agim",
                "points" => 68
            ],
            [
                "prenom" => "Omer",
                "points" => 58
            ],
            [
                "prenom" => "Massine",
                "points" => 52
            ],
        ],
        "classe" => "Wauters 1"
    ],
    "classe2" => [
        "students" => [
            
            [
                "prenom" => "Daniel",
                "points" => 83
            ],
            [
                "prenom" => "Sola",
                "points" => 74
            ],
            [
                "prenom" => "Samuel",
                "points" => 72
            ],
        ],
        "classe" => "Wauters 2"
    ]
];

var_dump($students);
echo "<pre>";
print_r($students);
echo json_encode($students);
echo "</pre>";