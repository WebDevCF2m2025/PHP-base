<?php
# formateur\19-recap-CF\public\index.php

/* 
*  ------------------------------------
*  Ce fichier est le contrôleur frontal
*  ------------------------------------
*/

// Gestion des variables GET
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'formations':
            include "../view/formations.php";
            break;
        case 'programme':
            include "../view/programme.php";
            break;
        case 'news':
            include "../view/newsletter.php";
            break;
        case 'contact':
            include "../view/contact.php";
            break;
        default:
            echo "error 404";
            break;
    }
} else {
    include "../view/homepageView.php";
}
