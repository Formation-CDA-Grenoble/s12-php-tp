<?php

// Lit les variables d'environnement
$_ENV = parse_ini_file('.env');

// Charge les fonctions permettant d'exploiter l'API de The Movie DB
include 'api/tmdb.php';

// Récupère les informations d'une série télévisée
$tvShow = getTvShow(MY_TV_SHOWS[1]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My beautiful app</title>
</head>
<body>
    <h1><?= $tvShow->name ?></h1>
    <a href="<?= $tvShow->homepage ?>">Homepage</a>
    <div>
        <img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2<?= $tvShow->poster_path ?>" />
    </div>
    <h2>Seasons</h2>
    <ul>
        <?php foreach($tvShow->seasons as $season): ?>
        <li>Season <?= $season->season_number ?>: <?= $season->name ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
