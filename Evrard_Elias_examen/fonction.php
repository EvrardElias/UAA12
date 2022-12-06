<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/syle.css">
    <title>Document</title>
</head>
<body>
    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="fonction.php">Fonction</a></li>
        <li>Contact</li>
    </ul>
    <div class="centre">
        <div class="haut">
            <h1>Affichage avec des fonctions PHP</h1>
            <div>
                <h2>Trouver les diviseurs d'un nombre</h2>
                <?php 
                    function chercheDiviseur($nb)
                    {
                        $i = 1 ;
                        $diviseur = " ";
                        while($i <= $nb)
                        {
                            if(fmod($nb, $i) == 0)
                            {
                                $diviseur = $diviseur . $i . " " ;
                            }
                            $i = $i + 1;
                        }
                        return $diviseur;
                    }
                ?>
                <p>Le nombre 725 à <?=chercheDiviseur(725)?> comme diviseur</p>
            </div>
            <div>
                <h2>Est ce un triangle rectangle et lequel.</h2>
                <?php
                    function triangleRectangle($c1, $c2, $c3)
                    {
                        if($c1 >= $c2 && $c1 >= $c3)
                        {
                            $pg = $c1;
                            $cote2 = $c2;
                            $cote3 = $c3;
                        }
                        elseif($c2 >= $c1 && $c2 >= $c3)
                        {
                            $pg = $c2;
                            $cote2 = $c1;
                            $cote3 = $c3;
                        }
                        else
                        {
                            $pg = $c3;
                            $cote2 = $c1;
                            $cote3 = $c2;
                        }
                        if($pg<$cote2 + $cote3)
                        {
                            if(pow($pg, 2) == pow($cote2, 2) + pow($cote3, 2))
                            {
                                if($cote2 == $cote3)
                                {
                                    $message = "Triangle rectangle isocèle";
                                }
                                else
                                {
                                    $message = "Triangle rectangle";
                                }
                            }
                            else
                            {
                                $message = "Le triangle n'est pas rectangle";
                            }
                        }
                        else
                        {
                            $message = "Ces dimensions ne peuvent être celles d'un triangle";
                        }
                        return $message;
                    }
                ?>
                <p><?=triangleRectangle(3, 5 , 8)?></p>
            </div>
        </div>
        <div class="Bas">
            <h1>Affichage sans fonctions PHP</h1>
            <div>
                <h2>Changer un nombre par un autre</h2>
            </div>
            <div>
                <h2>Remplacer les voyelles et consonnes</h2>

            </div>
        </div>
    </div>
    <div class="footer">
        <div class="gauche">
            <p>Examen 2022-2023</p>
            <p>UAA12: Création d'un site web dynamique</p>
        </div>
        <div class="droite">
            <p>5TTI</p>
        </div>
    </div>
</body>
</html>