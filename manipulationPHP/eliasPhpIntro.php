<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Exercice 1</h1>
        <p>Hello World </p>
        <h1>Exercice 2</h1>
        <?php for ($nombre = 1; $nombre <= 10; $nombre++) :?>
            <p>Le nombre vaut <?=$nombre?> </p>
        <?php endfor ?>
        <h1>Exercice 3</h1>
        <?php
            for ($nombre = 1; $nombre <= 2; $nombre++){
                echo '<p>Le nombre vaut '.$nombre.'</p>';
            }
            for ($nombre = 4; $nombre <= 10; $nombre++){
                echo '<p>Le nombre vaut '.$nombre.'</p>';
            }
        ?>
        <h1>Exercice 4</h1>
        <?php
            for ($nombre = 1; $nombre <= 3; $nombre++){
                echo '<p>Le nombre vaut '.$nombre.'</p>';
            }
            for ($nombre = 8; $nombre <= 10; $nombre++){
                echo '<p>Le nombre vaut '.$nombre.'</p>';
            }
        ?>
        <h1>Exercice 5</h1>
        <?php
            echo '<p>La valeur absolue de -5 vaut ' .abs(-5).' </p>';
            echo '<p>La valeur absolue de 10 vaut ' .abs(10).' </p>';
        ?>
</body>
</html>