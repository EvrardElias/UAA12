<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elias Evrard</title>

</head>

<body>   
    <form action="">
    <fieldset>
        <legend>Vos coordonnées</legend>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div>
            <label for="dateNaissance">Date de naissance :</label>
            <input type="date" name="dateNaissance" id="dateNaissance">
        </div>
        <div>
            <label for="email"> Email :</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="pays">Pays :</label>
            <select name="pays" id="pays">
                <option value="belgique">Belgique</option>
            </select>
        </div>
    </fieldset>
     <fieldset>
        <legend>Périodicité</legend>
        <div>
            <label for="hebdo">Newsletter hebdomadaire</label>
            <input type="radio" name="hebdo" value="hebdo" id="hebdo">
        </div>
        <div>
            <label for="mensuelle">Newsletter mensuelle</label>
            <input type="radio" name="mensuelle" id="mensuelle">
        </div>
        <div>
            <label for="trim">Newsletter trimestrielle</label>
            <input type="radio" name="trim" id="trim">
        </div>
     </fieldset>
     <fieldset>
        <legend>Version papier/informatique</legend>
        <div>
            <label for="papier">Recevoir la version papier</label>
            <input type="checkbox" name="papier" id="papier">
        </div>
        <div>
            <label for="informatique">Recevoir la version informatique</label>
            <input type="checkbox" name="informatique" id="informatique">
        </div>
        <div>
            <label for="copie">Nombre de copies souhaitées :</label>
            <input type="number" name="copie" id="copie">
        </div>
    </fieldset>
     <input type="button" value="Envoyer">
    </form>
</body>

</html>