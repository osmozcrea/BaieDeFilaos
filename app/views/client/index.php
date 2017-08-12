<?php
    require_once(ROOT.'helpers/loadSrcHelper.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Liste des Clients</title>
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
        <a href="<?= WEBROOT ?>client/inscription" >Inscrire un client</a> &nbsp;&nbsp;
        <a href="<?= WEBROOT ?>index/index" >Accueil</a>
    </div>

    <br /><br />

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Liste des clients</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="<?= WEBROOT ?>index/index">Accueil</a></li>
                        <li class="active"><span>Liste des clients</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Liste des clients</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table id="datable_listeClients" class="table table-hover display  pb-30" >
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>Date de naissance</th>
                                                <th>Profession</th>
                                                <th>Pays de résidence</th>
                                                <th>Ville de résidence</th>
                                                <th>Piece d'identité</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>Date de naissance</th>
                                                <th>Profession</th>
                                                <th>Pays de résidence</th>
                                                <th>Ville de résidence</th>
                                                <th>Piece d'identité</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php
//                                                foreach($data as $d)
//                                                {
//                                                    echo "<tr>";
//                                                    echo ('<td>'.$d->nom.'</td>');
//                                                    echo ('<td>'.$d->prenom.'</td>');
//                                                    echo ('<td>'.$d->email.'</td>');
//                                                    echo ('<td>'.$d->datenaissance.'</td>');
//                                                    echo ('<td>'.$d->profession.'</td>');
//                                                    echo ('<td>'.$d->paysresidence.'</td>');
//                                                    echo ('<td>'.$d->villeresidence.'</td>');
//                                                    echo ('<td>'.$d->pieceidentite.'</td>');
//                                                    echo ('<td>&nbsp;</td>');
//                                                    echo "</tr>";
//                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12">
                    <p>2017 &copy; Baie de Filaos</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script >
        //Test de l'ajax
        $(document).ready(function() {
            $.ajax({
                url : '<?= WEBROOT ?>client/chargerListeClients',
                type : 'GET',
                dataType : 'json',
                success : function(data, statut){
                    console.table(data);
                },

                error : function(resultat, statut, erreur){
                    console.log("erreur: \n" + erreur);
                },

                complete : function(resultat, statut){

                }

            });
        } );
    </script>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?= loadSrcHelper::loadSRC(WEBROOT, "vendors/bower_components/bootstrap/dist/js/bootstrap.min.js") ?>"></script>

    <!-- Data table JavaScript -->
    <script src="<?= loadSrcHelper::loadSRC(WEBROOT, "vendors/bower_components/datatables/media/js/jquery.dataTables.min.js") ?>"></script>
    <script >
        $(document).ready(function() {
            "use strict";

            var table = $('#datable_listeClients').DataTable({
                "ajax": {
                    "url": '<?= WEBROOT ?>client/chargerListeClients',
                    "dataSrc": "data"
                },
                "columnDefs": [ {
                    "targets": -1,
                    "data": null,
                    "defaultContent": "<button>Click!</button>"
                } ]
            });

            $('#datable_listeClients tbody').on( 'click', 'button', function () {
                var data = table.row( $(this).parents('tr') ).data();
                alert( data[0] );
            } );


        } );
    </script>

</body>
</html>