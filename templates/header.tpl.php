<?php include 'templates/tv-shows.tpl.php' ?>

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
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">All TV Shows</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tv-show.php">Random TV Show</a>
            </li>
            </ul>
            <form action="tv-show.php">
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

        </div>
        </nav>
    </header>