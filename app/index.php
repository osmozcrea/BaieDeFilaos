<?php 
//Définition des constantes désignant les chemins
define('WEBROOT', str_replace('index.php', '',$_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('index.php', '',$_SERVER['SCRIPT_FILENAME']));

//Inclusion des classes principales
require(ROOT.'core/model.php');
require(ROOT.'core/controller.php');

//Recupération des paramètres URL
$params = explode('/', $_GET['p']);
$controller = (isset($params[0]) && !empty($params[0])) ? $params[0] : 'index';
$action = (isset($params[1]) && !empty($params[1])) ? $params[1] : 'index';

require('controllers/'.$controller.'.php');
$controller = new $controller();
if(method_exists($controller, $action))
{
	unset($params[0], $params[1]);
	call_user_func_array(array($controller, $action), $params);
}
else
{
	//Gérer la redirection ici ! (erreur 404)
	echo 'Erreur 404: page non trouvée !';
}