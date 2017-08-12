<?php 
require_once(ROOT.'models/connexionMysql.php');

class client extends Controller{
	//Définition des modèles pour chargement automatique
	var $models = array('ClientMysql');

    /**
     * Liste l'ensemble des clients de la BD dans la vue index
     *
     */
	public function index(){
		$tab_data['data'] = $this->ClientMysql->getClients();
		
		$this->loadView('index', $tab_data);
	}

    /**
     * Affiche le détails d'un client dans la vue détails
     */
	public function detailClient($idClient){
	    $idClient = (int) $idClient;
	    if(isset($idClient) && $idClient > 0){
            $tab_data['data'] = $this->ClientMysql->getClient($idClient);

            $this->loadView('details', $tab_data);
        }
        else{
	        echo "Veuillez renseigner l'id du client";
        }
    }

    /**
     * Affiche le formulaire d'inscription
     */
    public function inscription(){
        $this->loadView('inscription', null);
    }

    /**
     * Ajoute un client à la BD et retourne les détails de ce client au format JSON
     */
	public function inscrire(){
	    if(isset($_POST)){
            $client = $this->ClientMysql->inscrireClient($_POST);

            echo json_encode($client);
        }
    }

    /**
     * Retourne la liste des clients au format JSON
     */
    public function chargerListeClients(){
        $tab_data['data'] = $this->ClientMysql->getClients();
        echo json_encode($tab_data);
    }

}