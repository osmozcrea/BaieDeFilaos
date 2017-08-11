<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 08/08/2017
 * Time: 20:47
 */
abstract class UtilisateurClass
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_login;
    private $_pwd;

    /**
     * Utilisateur constructor.
     *
     * @param array $data
     */
    public function __construct(array $data) {
        $this->hydrater($data);
    }

    /**
     * Définit les attibuts automatiquement suivant les index du tableaux associatif passé en paramètre
     *
     * @param array $donnees Tableau associatif conteant les données à définir. Les index devrant correspondre aux noms des attributs
     */
    public function hydrater(array $donnees)
    {
        foreach ($donnees as $cle => $valeur)
        {
            $method = 'set'.ucfirst($cle);

            if (method_exists($this, $method))
            {
                $this->$method($valeur);
            }
        }
    }

    /**
     * @return int
     */
    public function getId()
    {
        return (int) $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $id = (int) $id; //Conversion en entier
        if($id > 0)
        {
            $this->_id = $id;
        }
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param String $nom
     */
    public function setNom($nom) {
        if(is_string($nom))
        {
            $this->_nom = $nom;
        }
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param String $prenom
     */
    public function setPrenom($prenom) {
        if(is_string($prenom))
        {
            $this->_prenom = $prenom;
        }
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param String $email
     */
    public function setEmail($email)
    {
        if(is_string($email))
        {
            $this->_email = $email;
        }
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->_login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        if(is_string($login))
        {
            $this->_login = $login;
        }
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->_pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd)
    {
        if(is_string($pwd))
        {
            $this->_pwd = $pwd;
        }
    }

    /**
     * Retourne un tableau associatif réprésentant l'objet à partir de ses attributs comme index et leurs valeurs
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }

}