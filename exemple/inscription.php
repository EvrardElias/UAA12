<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <title>Inscription</title>
</head>

<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
            <li class="menu"><a href="profil.php">Page profil</a></li>
            <li class="menu"><a href="connexion.php">Connexion</a></li>
            <li class="menu"><a href="inscription.php">Inscription</li>
            <li class="imageMenu"><a href="index.php">
                    <ion-icon size="large" name="home-outline"></ion-icon>
                </a></li>
            <li class="imageMenu"><a href="profil.php">
                    <ion-icon size="large" name="person-outline"></ion-icon>
                </a></li>
            <li class="imageMenu"><a href="connexion.php">
                    <ion-icon size="large" name="log-in-outline"></ion-icon>
                </a></li>
            <li class="imageMenu"><a href="inscription.php">
                    <ion-icon size="large" name="create-outline"></ion-icon>
                </a></li>
        </ul>
    </header>
    <main>
        <form action="">
            <fieldset>
                <legend>
                    <h1>Inscription</h1>
                </legend>
                <div class="label">
                    <label for="prenom">Prenom :</label>
                    <input type="text" placeholder="Entrez votre prenom" name="prenom" id="prenom" required>
                </div>
                <div class="label">
                    <label for="nom">Nom :</label>
                    <input type="text" placeholder="Entrez votre nom" name="nom" id="nom" required>
                </div>
                <div class="label">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Entrez votre email" name="email" id="email" required>
                </div>
            </fieldset>
            <div class="connexion">
                <input type="submit" id="submit" value="Inscription" name="inscription">
            </div>
        </form>
    </main>
    <footer>
        <div class="flex space-between align-item-center">
            <p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
            <div>
                <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>