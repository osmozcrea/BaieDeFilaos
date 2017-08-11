<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inscription d'un client</title>
</head>

<body>

    <div>
        <a href="<?= WEBROOT ?>client/index" >Liste des clients</a>
    </div>

    <br /><br />

    <div>
        <form action="<?= WEBROOT ?>client/inscrire" method="POST" name="clientFormAdd">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Nom">
            </div>

            <div>
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" placeholder="Prenom">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>

            <div>
                <label for="dateNaissance">Date de naissance</label>
                <input type="text" name="dateNaissance" id="dateNaissance" placeholder="jj/mm/aaaa">
            </div>

            <div>
                <label for="paysResidence">Pays de résidence</label>
                <input type="text" name="paysResidence" id="paysResidence" placeholder="Pays de résidence">
            </div>

            <div>
                <label for="villeResidence">Ville de résidence</label>
                <input type="text" name="villeResidence" id="villeResidence" placeholder="Ville de résidence">
            </div>

            <div>
                <label for="profession">Profession</label>
                <input type="text" name="profession" id="profession" placeholder="Profession">
            </div>

            <div>
                <button type="submit" name="inscriptionClient">Enregistrer</button>
            </div>
        </form>

    </div>

</body>
</html>