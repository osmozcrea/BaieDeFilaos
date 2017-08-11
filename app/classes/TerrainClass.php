<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 08/08/2017
 * Time: 21:00
 */
class TerrainClass
{
    private $_id;
    private $_libelle;

    private $_lots = array();

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->_libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->_libelle = $libelle;
    }

    /**
     * Retourne un tableau associatif réprésentant l'objet à partir de ses attributs comme index et leurs valeurs
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }

}