<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/accueil.css">
    <title>Acceuil</title>
</head>
<body>
    <ul class="menu">
        <li><a href="connexion.php">Connexion</a></li>
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <h1>Animalerie Tom&Co</h1>
    <h3>Je veux des belles fonctions php (séparer analyse et affichage dans votre fichier)</h3>
    <?php
        function fonctionSpeciale($nombreDepart, $nombreElementsSouhaite)
        {
            $suite = " " . $nombreDepart . " ";
            for($i = 1; $i <= $nombreElementsSouhaite; $i++) 
            {
                if($nombreDepart < 5 && fmod($nombreDepart, 3) != 0)
                {
                    $nombreDepart = $nombreDepart * 5;
                }
                elseif($nombreDepart > 5 && $nombreDepart < 10)
                {
                    $nombreDepart = $nombreDepart / 6;
                }
                else
                {
                    $nombreDepart = $nombreDepart * $nombreDepart;
                }
                $suite = $suite . $nombreDepart . " ";
            }
            return $suite;
        }
    ?>
    <p>Voici une suite bien spéciale: <?= fonctionSpeciale(5, 10) ?></p>
    <?php
        function algorithmeEuclide2($nbr1, $nbr2)
        {
            $reste = $nbr2;
            while($reste != 0)
            {
                $reste = fmod($nbr1, $nbr2);
                $nbr1 = $nbr2;
                $nbr2 = $reste;
            }
            return $nbr1;
        }
        $tableau = [7, 8, 10, 5, 15, 48, 5];
        $phrase = "Bonjour à tous pour ces révisions .";
    ?>
    <p>Le PGCD entre 21 et 15 vaut <?= algorithmeEuclide2(21, 15) ?></p>
    <h3>Montrez moi comment afficher proprement du code</h3>
    <p>Dans la variable $tableau=[7,8,10,5,15,48,5], voici les nombre pairs</p>
    <?php for($compteur = 0; $compteur <= 5; $compteur++) : ?>
        <?php if($tableau[$compteur] % 2 == 0) : ?>
            <ul>
                <li><?= $tableau[$compteur] ?></li>
            </ul>
        <?php endif ?>
    <?php endfor ?>
    <p>Dans la variable $phrase "Bonjour à tous pour ces révisions", la dernière lettre de chaque mot est :</p>
    <?php for($comptageCara = 0; $comptageCara <= $phrase[$comptageCara]; $comptageCara++) : ?>
        <?php if($phrase[$comptageCara] = " ") :?>
            <ul>
                <li><?= $phrase[$comptageCara - 1]?></li>
            </ul>
        <?php endif ?>
    <?php endfor ?>
</body>
</html>