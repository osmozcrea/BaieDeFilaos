<?php

$bdAccessDev = [
    "bdName" => "baie_de_filaos",
    "bdHost" => "localhost",
    "bdUser" => "root",
    "bdPwd" => ""
];

$bdAccessProd = [
    "bdName" => "id2435357_baie_de_filaos",
    "bdHost" => "localhost",
    "bdUser" => "id2435357_osmozcrea",
    "bdPwd" => "0sm0zCREA$"
];

/** @var PDO $db Objet connexion*/
$db = null;

$bdAccess = $bdAccessDev; //On pourra simplement le modifier suivant les cas :)

try
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
	$db = new PDO('mysql:host='.$bdAccess["bdHost"].';dbname='.$bdAccess["bdName"], $bdAccess["bdUser"], $bdAccess["bdPwd"], $pdo_options);
}
catch (Exception $e)
{
	die('Connexion à la base de donnée impossible. Erreur: '.$e->getMessage());
}