<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 08/08/2017
 * Time: 21:08
 */
class VersementClass
{
    private $_id;
    private $_dateVersement;
    private $_datePrevu;
    private $_montantPrevu;
    private $_montantVerse;
    private $_modePaiement;
    private $_justificatif;

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
    public function getDateVersement()
    {
        return $this->_dateVersement;
    }

    /**
     * @param mixed $dateVersement
     */
    public function setDateVersement($dateVersement)
    {
        $this->_dateVersement = $dateVersement;
    }

    /**
     * @return mixed
     */
    public function getDatePrevu()
    {
        return $this->_datePrevu;
    }

    /**
     * @param mixed $datePrevu
     */
    public function setDatePrevu($datePrevu)
    {
        $this->_datePrevu = $datePrevu;
    }

    /**
     * @return mixed
     */
    public function getMontantPrevu()
    {
        return $this->_montantPrevu;
    }

    /**
     * @param mixed $montantPrevu
     */
    public function setMontantPrevu($montantPrevu)
    {
        $this->_montantPrevu = $montantPrevu;
    }

    /**
     * @return mixed
     */
    public function getMontantVerse()
    {
        return $this->_montantVerse;
    }

    /**
     * @param mixed $montantVerse
     */
    public function setMontantVerse($montantVerse)
    {
        $this->_montantVerse = $montantVerse;
    }

    /**
     * @return mixed
     */
    public function getModePaiement()
    {
        return $this->_modePaiement;
    }

    /**
     * @param mixed $modePaiement
     */
    public function setModePaiement($modePaiement)
    {
        $this->_modePaiement = $modePaiement;
    }

    /**
     * @return mixed
     */
    public function getJustificatif()
    {
        return $this->_justificatif;
    }

    /**
     * @param mixed $justificatif
     */
    public function setJustificatif($justificatif)
    {
        $this->_justificatif = $justificatif;
    }

    /**
     * Retourne un tableau associatif réprésentant l'objet à partir de ses attributs comme index et leurs valeurs
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }
}