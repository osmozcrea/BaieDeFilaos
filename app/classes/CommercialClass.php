<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 08/08/2017
 * Time: 20:56
 */

require_once(ROOT.'classes/UtilisateurClass.php');

class CommercialClass extends UtilisateurClass
{
    private $_clients = array();

    /**
     * @return mixed
     */
    public function getClients()
    {
        return $this->_clients;
    }

    /**
     * @param mixed $clients
     */
    public function setClients(array $clients)
    {
        $this->_clients = $clients;
    }

}