<?php
    require_once(ROOT.'helpers/loadSrcHelper.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Inscription Client</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="osmoz"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Data table CSS -->
    <link href="<?= loadSrcHelper::loadSRC(WEBROOT, "vendors/bower_components/datatables/media/css/jquery.dataTables.min.css") ?>" rel="stylesheet" type="text/css"/>

    <link href="<?= loadSrcHelper::loadSRC(WEBROOT, "vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css") ?>" rel="stylesheet" type="text/css">

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


    <!-- jQuery -->
    <script src="<?= loadSrcHelper::loadSRC(WEBROOT, "vendors/bower_components/jquery/dist/jquery.min.js") ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= loadSrcHelper::loadSRC(WEBROOT, "vendors/bower_components/bootstrap/dist/js/bootstrap.min.js") ?>"></script>

    <!-- Data table JavaScript -->
    <script src="<?= loadSrcHelper::loadSRC(WEBROOT, "vendors/bower_components/datatables/media/js/jquery.dataTables.min.js") ?>"></script>
    <script src="<?= loadSrcHelper::loadSRC(WEBROOT, "js/dataTables-listeClients.js") ?>"></script>
</body>
</html>