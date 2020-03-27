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
    <div class="container">
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
</body>
</html>
