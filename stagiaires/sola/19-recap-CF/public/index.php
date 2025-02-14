<?php
# formateur\19-recap-CF\public\index.php

/* 
*  ------------------------------------
*  Ce fichier est le contrôleur frontal
*  ------------------------------------
*/

// Gestion des variables GET
if (isset($_GET['p'])){
    switch($_GET['p']){
        case "formations": 
            include "../view/formationsView.php";
            break;
        case "formulaire":
            include "../view/formulaireView.php";
            break;
        case "newsletter":
            include "../view/newsletterView.php";
            break;
        case "programme":
            include "../view/programmeView.php";
            break;
        default:
            include "../view/error404View.php";
        }
} else {
    include "../view/homepageView.php";
}



