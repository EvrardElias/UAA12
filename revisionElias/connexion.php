<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/connexion.css">
    <title>Connexion</title>
</head>
<body>
    <ul class="menu">
        <li><a href="connexion.php">Connexion</a></li>
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <h1>Connexion plateforme</h1>
    <form action="">
    <fieldset>
        <legend>Formulaire de contact</legend>
        <div class="label">
            <label for="nom">Nom</label>
            <input type="text" placeholder="Entrez votre nom" name="nom" id="nom" required>
        </div>
        <div class="label">
            <label for="prenom">Prénom</label>
            <input type="text" placeholder="Entrez votre prénom" name="prenom" id="prenom" required>
        </div>
        <div class="label">
            <label for="email">Email</label>
            <input type="email" placeholder="Entrez votre email" name="email" id="email" required>
        </div>
        <div class="label">
            <label for="mdp">Mot de passe</label>
            <input type="password" placeholder="Entrez le mot de passe" name="mdp" id="mdp" required>
        </div>
        <div>
            <label for="bot">Je ne suis pas un robot</label>
            <input type="checkbox" name="bot" id="bot" required>
        </div>
        <div class="connexion">
            <input type="submit" id="submit" value="Connexion">
        </div>
</body>
</html>