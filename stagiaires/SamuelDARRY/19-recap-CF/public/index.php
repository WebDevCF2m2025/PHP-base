<?php
# formateur\19-recap-CF\public\index.php

/* 
*  ------------------------------------
*  Ce fichier est le contrôleur frontal
*  ------------------------------------
*/

// Gestion des variables GET
if (isset($_GET['p'])) {
    if ($_GET['p'] == 'formations') {
        include "../view/formations.php";
    } elseif ($_GET['p'] == 'formulaire') {
        include '../view/formulaire.php';
    } elseif ($_GET['p'] == 'newsletter') {
        include '../view/newsletter.php';
    } elseif ($_GET['p'] == 'programme') {
        include '../view/programme.php';
    }
}

// Appel d'une des vues (par défaut l'accueil)
include "../view/homepageView.php";