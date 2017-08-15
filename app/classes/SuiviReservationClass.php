<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 08/08/2017
 * Time: 21:07
 */
class SuiviReservationClass
{
   // private $_id;
    private $_date;

    private $_idReservation;
    private $_idStatutReservation;

    /**
     * @return mixed
     */
    public function getIdReservation()
    {
        return $this->_idReservation;
    }

    /**
     * @param mixed $idReservation
     */
    public function setIdReservation($idReservation)
    {
        $this->_idReservation = $idReservation;
    }

    /**
     * @return mixed
     */
    public function getIdStatutReservation()
    {
        return $this->_idStatutReservation;
    }

    /**
     * @param mixed $idStatutReservation
     */
    public function setIdStatutReservation($idStatutReservation)
    {
        $this->_idStatutReservation = $idStatutReservation;
    }

    /**
     * @return mixed
     */
/*    public function getId()
    {
        return $this->_id;
    }*/

    /**
     * @param mixed $id
     */
/*    public function setId($id)
    {
        $this->_id = $id;
    }*/

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
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }

}