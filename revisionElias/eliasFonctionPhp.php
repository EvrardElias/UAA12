<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elias</title>
</head>
<body>
    <h1>Titre Principal</h1>
    <?php 
        function calculFactoriel ($compteur)
        {
            $resultatFactoriel = 1;
            for($compteur = 1; $compteur <= 7; $compteur++) {
                $resultatFactoriel = $resultatFactoriel * $compteur;
            }
            return $resultatFactoriel;
        }
    ?>
    <h1>Resultat</h1>
    <p>Le resultat est: <?= calculFactoriel(7) ?></p>
    <?php
        function nombreLettre ($chaineDepart, $caractere)
        {
            $longueurChaine = strlen($chaineDepart);
            $nbOccurence = 0;
            for($compteur = 0; $compteur <= $longueurChaine - 1; $compteur++) {
                if($chaineDepart[$compteur] == $caractere){
                    $nbOccurence = $nbOccurence + 1;
                }
            }
            return $nbOccurence;
        }
    ?>
    <h1>Resultat</h1>
    <p>Le resultat est : <?= nombreLettre("Bonjour le monde", "o") ?></p>
</body>
</html>