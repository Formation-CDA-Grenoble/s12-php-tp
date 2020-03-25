<?php

// Lit les variables d'environnement
$_ENV = parse_ini_file('.env');

// Charge les fonctions permettant d'exploiter l'API de The Movie DB
include 'api/tmdb.php';

// Récupère les informations d'une série télévisée
$tvShow = getTvShow(MY_TV_SHOWS[0]);

// Permet de visualiser les variables d'environnement
// Décommenter le code ci-dessous pour visualiser
    // var_dump($_ENV); die();

// Permet de visualiser le nom de la série télévisée choisie
// Décommenter le code ci-dessous pour visualiser
    // var_dump($tvShow->name); die();

// Permet de visualiser toutes les saisons de la série télévisée choisie
// Décommenter le code ci-dessous pour visualiser
    // var_dump($tvShow->seasons); die();
    