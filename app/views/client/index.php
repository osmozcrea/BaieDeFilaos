<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Liste des clients</title>
</head>

<body>
    <div>
        <a href="<?= WEBROOT ?>client/inscription" >Inscrire un client</a> &nbsp;&nbsp;
        <a href="<?= WEBROOT ?>index/index" >Accueil</a>
    </div>

    <br /><br />

    <table>
        <caption>Liste des clients</caption>
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Date de naissance</th>
            <th>Profession</th>
            <th>Pays de résidence</th>
            <th>Ville de résidence</th>
            <th>Piece d'identité</th>
            <th>Actions</th>
        </thead>
        <tbody>
        <?php
            foreach($data as $d)
            {
                echo "<tr>";
                echo ('<td>'.$d->nom.'</td>');
                echo ('<td>'.$d->prenom.'</td>');
                echo ('<td>'.$d->email.'</td>');
                echo ('<td>'.$d->datenaissance.'</td>');
                echo ('<td>'.$d->profession.'</td>');
                echo ('<td>'.$d->paysresidence.'</td>');
                echo ('<td>'.$d->villeresidence.'</td>');
                echo ('<td>'.$d->pieceidentite.'</td>');
                echo ('<td>&nbsp;</td>');
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>

</body>
</html>