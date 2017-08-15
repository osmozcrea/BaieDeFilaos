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

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->_idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->_idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getIdLot()
    {
        return $this->_idLot;
    }

    /**
     * @param mixed $idLot
     */
    public function setIdLot($idLot)
    {
        $this->_idLot = $idLot;
    }

    /**
     * @return array
     */
    public function getStatutReservations()
    {
        return $this->_statutReservations;
    }

    /**
     * @param array $statutReservations
     */
    public function setStatutReservations($statutReservations)
    {
        $this->_statutReservations = $statutReservations;
    }

    /**
     * @return array
     */
    public function getVersements()
    {
        return $this->_versements;
    }

    /**
     * @param array $versements
     */
    public function setVersements($versements)
    {
        $this->_versements = $versements;
    }
    private $_idClient;
    private $_idLot;

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
     * Retourne un tableau associatif réprésentant l'objet à partir de ses attributs comme index et leurs valeurs
     *
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }

}