<?php
# formateur\19-recap-CF\public\index.php

/* 
*  ------------------------------------
*  Ce fichier est le contrôleur frontal
*  ------------------------------------
*/

// Gestion des variables GET


// Appel d'une des vues (par défaut l'accueil)

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'formation':
            include "../view/formations.php";
            break;
        case 'programme':
            include "../view/programme.php";
            break;
        case 'news';
            include "../view/newsletter.php";
        case 'formulaire';
            include "../view/formulaire.php";
    } 
}else{
    include "../view/homepageView.php";
}