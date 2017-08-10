<?php 
require_once(ROOT.'models/connexionMysql.php');

class client extends Controller{
	//Définition des modèles pour chargement automatique
	var $models = array('ClientMysql');

    /**
     * Liste l'ensemble des clients de la BD
     */
	public function index(){
		$donnees = array('dateNaissance', 'pieceIdentite', 'profession', 'paysResidence', 'villeResidence');
		$tab_data['data'] = $this->ClientMysql->getAll($donnees);
		
		$this->loadView('index', $tab_data);
	}

    /**
     * Ajoute un client à la BD
     */
	public function inscrire(){
        $idClientAjoute = $this->ClientMysql->inscrire($_POST);

        var_dump($idClientAjoute);
    }

}