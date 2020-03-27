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
$currentTvShow = getTvShow($currentTvShowId);

$allTvShows = [];
foreach (MY_TV_SHOWS as $tvShowId) {
    array_push($allTvShows, getTvShow($tvShowId));
}

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
        <form>
            <select name="show-id">
                <?php foreach($allTvShows as $tvShow): ?>
                <option
                    value="<?= $tvShow->id ?>"
                    <?php if ($tvShow->id == $currentTvShowId) echo 'selected="selected"' ?>
                >
                    <?= $tvShow->name ?>
                </option>
                <?php endforeach; ?> 
            </select>
            <button type="submit" class="btn btn-primary">
                Show TV series
            </button>
        </form>
        <div class="jumbotron">
            <h1>
                <?= $currentTvShow->name ?>
                <small>
                    <a href="<?= $currentTvShow->homepage ?>">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                </small>
            </h1>
            <div>
                <img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2<?= $currentTvShow->poster_path ?>" />
            </div>
        </div>
        <h2>Seasons</h2>
        <ul class="list-group">
            <?php foreach($currentTvShow->seasons as $season): ?>
            <li class="list-group-item">
                Season <?= $season->season_number ?>: <?= $season->name ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
