<?php
/** @var PDO $db Objet connexion*/
$db = null;
/** @var String $mabase Nom de la base de données*/
$mabase="baie_de_filaos";
/** @var String $hote_bd Domaine hôte de la base de données*/
$hote_bd="localhost";
/** @var String $user_bd Utilisateur de la base de données */
$user_bd="root";
/** @var String $mdp_bd Mot de passe de l'utilisateur de la base de données */
$mdp_bd="";

try
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
	$db = new PDO('mysql:host='.$hote_bd.';dbname='.$mabase, $user_bd, $mdp_bd, $pdo_options);
}
catch (Exception $e)
{
	die('Connexion à la base de donnée impossible. Erreur: '.$e->getMessage());
}