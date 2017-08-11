<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 08/08/2017
 * Time: 21:04
 */
class ReservationClass
{
    private $_id;
    private $_date;
    private $_statut;

    private $_client;
    private $_terrain;

    private $_statutReservations = array();
    private $_versements = array();

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
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->_date = $date;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->_statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->_statut = $statut;
    }

    /**
     * Retourne un tableau associatif réprésentant l'objet à partir de ses attributs comme index et leurs valeurs
     *
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }

}