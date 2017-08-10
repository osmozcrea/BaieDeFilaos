<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 09/08/2017
 * Time: 10:57
 */

require_once(ROOT.'classes/ClientClass.php');

class ClientMysql extends Model{
	var $table = 'client';

    /**
     * Inscrit l'utlisateur rajouter un utilisateur à la BD puis en le liant à un client qui est créé par la suite
     *
     * @param array $data Les données du client
     *
     * @return L'identifiant du client ajouté | null
     */
	public function inscrire(array $data){
        try {
            $client = new ClientClass($data);

            $requete = 'INSERT INTO Utilisateur SET ';
            $requete .= (!is_null($client->getNom())) ? " nom = :nom" : "";
            $requete .= (!is_null($client->getPrenom())) ? " ,prenom = :prenom" : "";
            $requete .= (!is_null($client->getEmail())) ? " ,email = :email" : "";
            $requete .= (!is_null($client->getLogin())) ? " ,login = :login" : "";
            $requete .= (!is_null($client->getPwd())) ? " ,pwd = :pwd" : "";

            $resultat = $this->db->prepare($requete);

            if(!is_null($client->getNom())){
                $resultat->bindValue('nom', $_POST["nom"], PDO::PARAM_STR);
            }
            if(!is_null($client->getPrenom())){
                $resultat->bindValue('prenom', $_POST["prenom"], PDO::PARAM_STR);
            }
            if(!is_null($client->getEmail())){
                $resultat->bindValue('email', $_POST["email"], PDO::PARAM_STR);
            }
            if(!is_null($client->getLogin())){
                $resultat->bindValue('login', $_POST["login"], PDO::PARAM_STR);
            }
            if(!is_null($client->getPwd())){
                $resultat->bindValue('pwd', $_POST["pwd"], PDO::PARAM_STR);
            }

            $test_execute = $resultat->execute();
            $resultat->closeCursor();

            if ($test_execute) {
                $client->setId( (int) $this->db->lastInsertId('Utilisateur.id'));
                return $this->addClient($client);
            }
            else{
                return null;
            }
        } catch (Exception $ex) {
            echo "Erreur dans l'enregistrement de l'utilisateur : \n", $ex->getMessage();
        }
    }

    /**
     * Ajoute le client à la BD si son identiant est défini
     * i.e. si l'utilisateur correspondant existe
     *
     * @param ClientClass $client
     *
     * @return L'identifiant de l'utilisateur ajouté | null
     */
    private function addClient(ClientClass $client){

        if(!is_null($client->getId())){
            $data = ["id" => $client->getId()];

            if(!is_null($client->getPaysResidence())){
                $data["paysresidence"] = $client->getPaysResidence();
            }
            if(!is_null($client->getVilleResidence())){
                $data["villeresidence"] = $client->getVilleResidence();
            }
            if(!is_null($client->getProfession())){
                $data["profession"] = $client->getProfession();
            }
            if(!is_null($client->getDateNaissance())){
                $data["datenaissance"] = $client->getDateNaissance();
            }
            if(!is_null($client->getPieceIdentite())){
                $data["pieceidentite"] = $client->getPieceIdentite();
            }

            return $this->add($data);
        }
        else{
            return null;
        }
    }
}

