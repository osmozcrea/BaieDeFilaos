<?php 
require_once(ROOT.'models/connexionMysql.php');

class client extends Controller{
	//Définition des modèles pour chargement automatique
	var $models = array('ClientMysql');
	
	public function index(){
		$donnees = array('dateNaissance', 'pieceIdentite', 'profession', 'paysResidence', 'villeResidence');
		$tab_data['data'] = $this->ClientMysql->getAll($donnees);
		
		$this->loadView('index', $tab_data);
	}
}