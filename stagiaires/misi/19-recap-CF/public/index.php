<?php
# formateur\19-recap-CF\public\index.php

/* 
*  ------------------------------------
*  Ce fichier est le contrôleur frontal
*  ------------------------------------
*/

// Gestion des variables GET

if (isset($_GET["page"])){
    if($_GET["page"] == "formations"){
        include_once "../view/formations.php";
    }elseif($_GET["page"] == "programme"){
        include_once "../view/programme.php";

    }elseif($_GET["page"] == "newsletter"){
        include_once "../view/newsletter.php";

    }elseif($_GET["page"] == "contact"){
        include_once "../view/formulaire.php";
    }
        
}

// Appel d'une des vues (par défaut l'accueil)
include "../view/homepageView.php";