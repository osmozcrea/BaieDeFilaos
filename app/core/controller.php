<?php
require_once(ROOT . 'models/connexionMysql.php');

class Controller
{
    var $vars = array();

    public function __construct()
    {
        //Charge automatiquement les models existants
        if (isset($this->models)) {
            foreach ($this->models as $model) {
                $this->loadModel($model);
            }
        }
    }

    /**
     *Charge le fichier spécifié (vue)
     *Transfert le tableau de variables dans le fichier spécifié
     *
     * @param String $filename Nom du fichier à recupérer
     * @param array $data Tableau des valeurs à transmettre
     **/
    public function loadView($filename, array $data = NULL)
    {
        if (isset($data) && !is_null($data)) {
            $this->vars = array_merge($this->vars, $data);
            extract($this->vars); //Crée des variables à partir des index du tableaux en paramètre
        }
        require(ROOT . 'views/' . get_class($this) . '/' . $filename . '.php');
    }

    /**
     *Charge le fichier spécifié (model)
     *
     * @param string $name Nom du fichier à recupérer
     **/
    public function loadModel($name)
    {
        require_once(ROOT . 'models/' . $name . '.php');
        $this->$name = new $name($GLOBALS["db"]);
    }
}