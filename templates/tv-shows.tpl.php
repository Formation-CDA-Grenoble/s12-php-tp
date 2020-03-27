<?php

// Lit les variables d'environnement
$_ENV = parse_ini_file('.env');

// Charge les fonctions permettant d'exploiter l'API de The Movie DB
include 'api/tmdb.php';

if (isset($_GET['show-id'])) {
    $currentTvShowId = $_GET['show-id'];
} else {
    $index = rand(0, count(MY_TV_SHOWS) - 1);
    $currentTvShowId = MY_TV_SHOWS[$index];
}

// Récupère les informations d'une série télévisée
$allTvShows = [];
foreach (MY_TV_SHOWS as $tvShowId) {
    $allTvShows[$tvShowId] = getTvShow($tvShowId);
}

$currentTvShow = $allTvShows[$currentTvShowId];
