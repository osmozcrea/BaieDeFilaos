<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 10/08/2017
 * Time: 16:36
 */
require_once(ROOT.'models/connexionMysql.php');

class index extends Controller
{

    public function index(){
        $tab_data = null;
        $this->loadView('index', $tab_data);
    }

}