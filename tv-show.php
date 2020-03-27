<?php include 'templates/header.tpl.php' ?>

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
        <a href="index.php" class="btn btn-secondary">
            Back to list
        </a>
    </div>
</body>
</html>