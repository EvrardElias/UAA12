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
        <div class="galerie">
            <h3>Galerie Images</h3>
        </div>
        <div class="flex-grow">
            <div>
                <fieldset>
                <legend>Vos informations</legend>
                <div class="label">
                    <label for="nom">Votre nom</label>
                    <input type="text" placeholder="Nom" name="nom" id="nom" required>
                </div>
                <div class="label">
                    <label for="prenom">Votre prénom</label>
                    <input type="text" placeholder="Prénom" name="prenom" id="prenom" required>
                </div>
                <div class="label">
                    <label for="email">Votre mail</label>
                    <input type="email" placeholder="Email" name="email" id="email" required>
                </div>
                <div class="label">
                    <label for="telephone">Votre numéro de téléphone</label>
                    <input type="tel" placeholder="Numéro de téléphone" name="telephone" id="telephone" required>
                </div>
                </fieldset>
            </div>
            <div class="bouton">
                <input type="submit" id="envoyer" value="Envoyer">
            </div>
            <div>
                <fieldset>
                <legend>Votre Commande</legend>
                <div class="label">
                    <label for="choix">Choisissez parmis les possibilités</label>
                    <select name="choix" id="choix">
                        <optgroup label="HardWare">   
                            <option value="ecran">Ecran</option>
                            <option value="souris">Souris</option>
                            <option value="clavier">Clavier</option>
                            <option value="ram">RAM</option>
                            <option value="disqueDur">Disque Dur</option>
                        </optgroup>
                        <optgroup label="SoftWare">
                            <option value="office365">Office 365</option>
                            <option value="packetTracer">Packet Tracer</option>
                            <option value="googleWorkspace">Google Workspace</option>
                        </optgroup>
                    </select> 
                </div>
                <div class="label">
                    <label for="quantite">La quantité souhaitée</label>
                    <input type="number" name="quantite" id="quantite" value="1" min="1" max="10" required>
                </div>
                <div class="label">
                    <label for="dateCommande">Date de commande souhaitée</label>
                    <input type="date" name="dateCommande" id="dateCommande" required>
                </div>
                <div>
                    <label for="parMail">Par mail</label>
                    <input type="checkbox" name="parMail" id="parMail" checked>
                </div>
                <div>
                    <label for="parPapier">Par papier</label>
                    <input type="checkbox" name="parPapier" id="parPapier">
                </div>
                <div class="label">
                    <label for="remarques">Remarques supplémentaires</label>
                    <textarea name="remarques">Votre message</textarea>
                </div>
                </fieldset>
            </div>
        </div>
        <div class="galerie">
            <h3>Galerie Images</h3>
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