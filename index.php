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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b07d4a60b8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>
                <?= $tvShow->name ?>
                <a href="<?= $tvShow->homepage ?>">
                    <i class="fas fa-external-link-alt"></i>
                </a>
            </h1>
            <div>
                <img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2<?= $tvShow->poster_path ?>" />
            </div>
        </div>
        <h2>Seasons</h2>
        <ul class="list-group">
            <?php foreach($tvShow->seasons as $season): ?>
            <li class="list-group-item">
                Season <?= $season->season_number ?>: <?= $season->name ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
