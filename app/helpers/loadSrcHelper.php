<?php

/**
 * Created by PhpStorm.
 * User: NOYAF-PC
 * Date: 11/08/2017
 * Time: 15:51
 */
class loadSrcHelper
{
    const LIEN_SRC = "assets/";
    const LIEN_CSS = "";
    const LIEN_JS = "";
    const LIEN_IMG = "";

    public static function loadSRC($root, $ressource){
        return $root.Self::LIEN_SRC.$ressource;
    }


}