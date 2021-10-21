<?php
include __DIR__ . "/database.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>PHP Dischi</title>
</head>

<body>
    <header>
        <img src="./img/spotify-logo.png" alt="">
    </header>
    <main>
        <div class="container">
            <?php foreach ($database as $song) : ?>
                <div class="song-card">
                    <img class="image" src="<?php echo $song["poster"]; ?>" alt="">
                    <h3 class="song-title">
                        <?php echo strtoupper($song["title"]); ?>
                    </h3>
                    <div class="author">
                        <?php echo $song["author"]; ?>
                    </div>
                    <div class="year">
                        <?php echo $song["year"]; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>