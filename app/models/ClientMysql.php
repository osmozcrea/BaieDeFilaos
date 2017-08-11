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
     * @return Object Le client ajouté | null
     */
	public function inscrireClient(array $data){
        try {
            $client = new ClientClass($data);

            $this->db->beginTransaction(); //Début de la transaction

            $requete = 'INSERT INTO utilisateur SET ';
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
                $client->setId( (int) $this->db->lastInsertId('utilisateur.id'));
                return $this->addClient($client);
            }
            else{
                $this->db->rollBack(); //Annulation de la transaction
                return null;
            }
        } catch (Exception $ex) {
            $this->db->rollBack(); //Annulation de la transaction
            echo "Erreur dans l'enregistrement de l'utilisateur : \n", $ex->getMessage();
        }
    }

    /**
     * Recupère le client dont l'id est spécifié de la base de données
     *
     * @param $idClient
     *
     * @return Object Un objet constitué à partir du client répéré dans la BD | null
     */
    public function getClient($idClient){
        $idClient = (int) $idClient;
        if(isset($idClient) && $idClient > 0){

            try {
                $requete = 'SELECT 
                            client.id AS id,
                            nom,
                            prenom,
                            email,
                            datenaissance,
                            pieceidentite,
                            profession,
                            paysresidence,
                            villeresidence
                        FROM FROM '. $this->table .'
                        INNER JOIN utilisateur ON utilisateur.id = client.id
                        WHERE client.id = :id';
                $resultat = $this->db->prepare($requete);
                $resultat->bindValue('id', $idClient, PDO::PARAM_INT);
                $row = $resultat->fetch(PDO::FETCH_OBJ);
                $resultat->closeCursor();

                return $row;
            } catch (Exception $ex) {
                echo "Erreur dans la recupération du client : \n", $ex->getMessage();
            }
        }
        else{
            return null;
        }
    }

    /**
     * Recupère l'ensemble des clients de la base de données
     *
     * @return Object[] L'ensemble des clients | null
     */
    public function getClients(){
       try {
           $requete = 'SELECT 
                        client.id AS id,
                        nom,
                        prenom,
                        email,
                        datenaissance,
                        pieceidentite,
                        profession,
                        paysresidence,
                        villeresidence
                    FROM '. $this->table .'
                    INNER JOIN utilisateur ON utilisateur.id = client.id';
           $resultat = $this->db->query($requete);
           $rows = $resultat->fetchAll(PDO::FETCH_OBJ);
           $resultat->closeCursor();

            return $rows;
        } catch (Exception $ex) {
           $this->db->rollBack();
            echo "Erreur dans la recupération des clients : \n", $ex->getMessage();
        }
    }

    /**
     * Ajoute le client à la BD si son identiant est défini
     * i.e. si l'utilisateur correspondant existe
     *
     * @param ClientClass $client
     *
     * @return int L'identifiant de l'utilisateur ajouté | null
     */
    private function addClient(ClientClass $client){

        if(!is_null($client->getId())){
            $requete = 'INSERT INTO ' . $this->table . ' SET id = :id';
            $requete .= (!is_null($client->getPaysResidence())) ? " ,paysresidence = :paysresidence" : "";
            $requete .= (!is_null($client->getVilleResidence())) ? " ,villeresidence = :villeresidence" : "";
            $requete .= (!is_null($client->getProfession())) ? " ,profession = :profession" : "";
            $requete .= (!is_null($client->getDateNaissance())) ? " ,datenaissance = :datenaissance" : "";
            $requete .= (!is_null($client->getPieceIdentite())) ? " ,pieceidentite = :pieceidentite" : "";

            $resultat = $this->db->prepare($requete);
            $resultat->bindValue('id', $client->getId(), PDO::PARAM_INT);

            if(!is_null($client->getPaysResidence())){
                $resultat->bindValue('paysresidence', $client->getPaysResidence(), PDO::PARAM_STR);
            }
            if(!is_null($client->getVilleResidence())){
                $resultat->bindValue('villeresidence', $client->getVilleResidence(), PDO::PARAM_STR);
            }
            if(!is_null($client->getProfession())){
                $resultat->bindValue('profession', $client->getProfession(), PDO::PARAM_STR);
            }
            if(!is_null($client->getDateNaissance())){
                $resultat->bindValue('datenaissance', $client->getDateNaissance(), PDO::PARAM_STR);
            }
            if(!is_null($client->getPieceIdentite())){
                $resultat->bindValue('pieceidentite', $client->getPieceIdentite(), PDO::PARAM_STR);
            }

            $test_execute = $resultat->execute();
            $resultat->closeCursor();

            $this->db->commit(); //Validation de la transaction

            if ($test_execute) {
                return $client;
            }
            else{
                return null;
            }
        }
        else{
            $this->db->rollBack(); //Annulation de la transaction
            return null;
        }
    }
}

