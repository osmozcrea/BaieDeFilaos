<?php

class Model
{
    protected $db;
    protected $table;
    private $id;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    ///////////////////////////////////////
    //      Définition des setters       //
    ///////////////////////////////////////
    /**
     *Définit la connexion à la BD
     *
     * @param PDO $db Variable de connexion de type pdo
     **/
    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    /**
     *Définit la table à utiliser
     * @param $table Nom de la table
     **/
    public function setTable($table)
    {
        $table = htmlspecialchars($table);
        if (is_string($table)) {
            $this->table = $table;
        }
    }

    /**
     * Définit l'identifiant de l'objet à manipuler
     *
     * @param $id Identifiant de l'objet
     **/
    public function setId($id)
    {
        $id = (int)$id;
        if ($id > 0) {
            $this->id = $id;
        }
    }

    ////////////////////////////////////////////////////
    //      Définition des différentes methodes       //
    ///////////////////////////////////////////////////
    /**
     *Recupère une ligne dans la base de données par rapport à l'id de l'objet
     *
     * @param string $id Identifiant de l'élément à recupérer
     * @param array $tab_champ Liste des champs à recupérer
     *
     * @return
     **/
    public function get($id, array $tab_champ = NULL)
    {
        $id = (int)$id;
        if ($id > 0) {
            $champs = ($tab_champ == NULL) ? '*' : implode(',', $tab_champ);

            try {
                $requete = 'SELECT ' . $champs . ' FROM ' . $this->table . ' WHERE id= :id';
                $resultat = $this->db->prepare($requete);
                $resultat->bindValue('id', $id, PDO::PARAM_INT);
                $test_execute = $resultat->execute();
                $donnees = $resultat->fetch(PDO::FETCH_OBJ);
                $resultat->closeCursor();

                return $donnees;
            } catch (Exception $ex) {
                echo "Erreur recupération : ", $ex->getMessage();
            }
        }
        else{
            return null;
        }
    }

    /**
     *Recupère toutes les lignes de la base de données
     * @param array $tab_champ Liste des champs à recupérer
     **/
    public function getAll(array $tab_champ = NULL)
    {

        $champs = ($tab_champ == NULL) ? '*' : implode(',', $tab_champ);

        try {
            $requete = 'SELECT ' . $champs . ' FROM ' . $this->table;
            $resultat = $this->db->query($requete);
            $rows = $resultat->fetchAll(PDO::FETCH_OBJ);
            $resultat->closeCursor();

            return $rows;
        } catch (Exception $ex) {
            echo "Erreur recupération globale : ", $ex->getMessage();
        }
    }

    /**
     *Enregistre une ligne dans la base de données
     * @param array $data Tableau associatif des valeurs à enregistrer
     *
     * @return L'id de l'élément inséré | null
     **/
    public function add(array $data)
    {
        $set = '';
        $i = 0;
        foreach ($data as $cle => $valeur) {
            $i++;
            if ($i == 1) {
                $set .= $cle . '="' . $valeur . '"';
            } else {
                $set .= ', ' . $cle . '="' . $valeur . '"';
            }
        }

        try {
            $requete = 'INSERT INTO ' . $this->table . ' SET ' . $set;
            $resultat = $this->db->prepare($requete);
            $test_execute = $resultat->execute();
            $resultat->closeCursor();

            if ($test_execute) {
                return $this->db->lastInsertId($this->table . '.id');
            }
            else{
                return null;
            }
        } catch (Exception $ex) {
            echo "Erreur enregistrement : ", $ex->getMessage();
        }
    }

    /**
     *Met à jour une ligne de la base de données par rapport à l'id de l'objet
     *
     * @param int $id Identifiant de l'élément à mettre à jour
     * @param array $data Tableau associatif des valeurs à mettre à jour
     *
     * @return boolean
     **/
    public function update($id, array $data)
    {
        $id = (int)$id;
        if ($id > 0) {
            $set = '';
            $i = 0;
            foreach ($data as $cle => $valeur) {
                $i++;
                if ($i == 1) {
                    $set .= $cle . '="' . $valeur . '"';
                } else {
                    $set .= ', ' . $cle . '="' . $valeur . '"';
                }
            }

            try {
                $requete = 'UPDATE ' . $this->table . ' SET ' . $set . ' WHERE id= :id';
                $resultat = $this->db->prepare($requete);
                $resultat->bindValue('id', $id, PDO::PARAM_INT);
                $test_execute = $resultat->execute();
                $resultat->closeCursor();

                return $test_execute;
            } catch (Exception $ex) {
                echo "Erreur mise à jour : ", $ex->getMessage();
            }
        }
    }

    /**
     * Supprime une ligne de la base de données par rapport à l'id de l'objet
     *
     * @param int $id Identifiant de l'élément à supprimer
     *
     * @return boolean
     **/
    public function delete($id)
    {
        $id = (int)$id;
        if ($id > 0) {
            try {
                $requete = 'DELETE FROM ' . $this->table . ' WHERE id= :id';
                $resultat = $this->db->prepare($requete);
                $resultat->bindValue('id', $id, PDO::PARAM_INT);
                $test_execute = $resultat->execute();
                $resultat->closeCursor();

                return $test_execute;
            } catch (Exception $ex) {
                echo "Erreur suppression : ", $ex->getMessage();
            }
        }
    }

    /**
     *Récupère le nombre total d'enrgistrement de la table
     *
     * @return
     **/
    public function getNb()
    {
        try {
            $requete = 'SELECT COUNT(*) AS nombre FROM ' . $this->table;
            $resultat = $this->db->query($requete);
            $rows = $resultat->fetch(PDO::FETCH_OBJ);
            $resultat->closeCursor();

            return $rows;
        } catch (Exception $ex) {
            echo "Erreur recupe nombre total : ", $ex->getMessage();
        }
    }

    /**
     * Exécute une requête SQL de type SELECT passée en paramètre
     *
     * @param String $query La requête SQL à exécuter
     * @param  array $params Tableau contenant l'ensemble des parametres de la requete
     *
     * @return Object | null
     */
    public function selectQuery($query, array $params){

        if(is_string($query)){
            try {
                $resultat = $this->db->prepare($query);

                foreach ($params as $cle => $valeur){
                    $resultat->bindValue($cle, $valeur, PDO::PARAM_STR);
                }
                $test_execute = $resultat->execute();
                $donnees = $resultat->fetch(PDO::FETCH_OBJ);
                $resultat->closeCursor();

                return $donnees;
            } catch (Exception $ex) {
                echo "Erreur recupération globale : ", $ex->getMessage();
            }
        }
        else{
            return null;
        }

    }
}