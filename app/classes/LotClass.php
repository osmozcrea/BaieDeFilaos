<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 08/08/2017
 * Time: 21:01
 */
class LotClass
{
    private $_id;
    private $_superficie;
    private $_longitude;
    private $_latitude;
    private $_altitude;
    private $_titreFoncier;
    private $_idTerrain;

    /**
     * @return mixed
     */
    public function getIdTerrain()
    {
        return $this->_idTerrain;
    }

    /**
     * @param mixed $idTerrain
     */
    public function setIdTerrain($idTerrain)
    {
        $this->_idTerrain = $idTerrain;
    }

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
    public function getSuperficie()
    {
        return $this->_superficie;
    }

    /**
     * @param mixed $superficie
     */
    public function setSuperficie($superficie)
    {
        $this->_superficie = $superficie;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->_longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->_longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->_latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->_latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getAltitude()
    {
        return $this->_altitude;
    }

    /**
     * @param mixed $altitude
     */
    public function setAltitude($altitude)
    {
        $this->_altitude = $altitude;
    }

    /**
     * @return mixed
     */
    public function getTitreFoncier()
    {
        return $this->_titreFoncier;
    }

    /**
     * @param mixed $titreFoncier
     */
    public function setTitreFoncier($titreFoncier)
    {
        $this->_titreFoncier = $titreFoncier;
    }

    /**
     * Retourne un tableau associatif réprésentant l'objet à partir de ses attributs comme index et leurs valeurs
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }

}