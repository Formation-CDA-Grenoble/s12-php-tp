<?php include 'templates/header.tpl.php' ?>

    <div class="container">
        <ul class="list-group">
            <?php foreach($allTvShows as $tvShow): ?>
            <li class="list-group-item">
                <a href="tv-show.php?show-id=<?= $tvShow->id ?>">
                    <?= $tvShow->name ?>
                </a>
            </li>
            <?php endforeach; ?> 
        </ul>
    </div>
</body>
</html>
