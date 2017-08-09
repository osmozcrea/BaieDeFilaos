<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 08/08/2017
 * Time: 20:56
 */

require_once(ROOT.'classes/UtilisateurClass.php');

class ClientClass extends UtilisateurClass
{
    private $_dateNaissance;
    private $_pieceIdentite;
    private $_profession;
    private $_paysResidence;
    private $_villeResidence;

    private $_terrains = array();

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    /**
     * @param String mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        if(is_string($dateNaissance))
        {
            $this->_dateNaissance = $dateNaissance;
        }
    }

    /**
     * @return mixed
     */
    public function getPieceIdentite()
    {
        return $this->_pieceIdentite;
    }

    /**
     * @param String mixed $pieceIdentite
     */
    public function setPieceIdentite($pieceIdentite)
    {
        if(is_string($pieceIdentite))
        {
            $this->_pieceIdentite = $pieceIdentite;
        }
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->_profession;
    }

    /**
     * @param String mixed $profession
     */
    public function setProfession($profession)
    {
        if(is_string($profession))
        {
            $this->_profession = $profession;
        }
    }

    /**
     * @return mixed
     */
    public function getPaysResidence()
    {
        return $this->_paysResidence;
    }

    /**
     * @param String mixed $paysResidence
     */
    public function setPaysResidence($paysResidence)
    {
        if(is_string($paysResidence))
        {
            $this->_paysResidence = $paysResidence;
        }
    }

    /**
     * @return mixed
     */
    public function getVilleResidence()
    {
        return $this->_villeResidence;
    }

    /**
     * @param String mixed $villeResidence
     */
    public function setVilleResidence($villeResidence)
    {
        if(is_string($villeResidence))
        {
            $this->_villeResidence = $villeResidence;
        }
    }



}