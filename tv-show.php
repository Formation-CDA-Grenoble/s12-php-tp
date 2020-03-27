<?php include 'templates/tv-shows.tpl.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b07d4a60b8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
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