<?php 
/*
	LES TEACHERS DU NET
	Created by Honoré Hounwanou
	@ www.youtube.com/hounwanou1993
	@ www.facebook.com/honore.hounwanou
	All rights reserved
	* Date: September 06, 2013
*------------------------------------------------------------------------------------------------*/

//Pensez à modifier les valeurs des constantes définies plus bas :)
//Ces derniers représentent les paramètres de connexion à la base de données
define('HOST', 'PUT_YOUR_HOST'); 
define('DBNAME', 'PUT_YOUR_DATABASE_NAME'); 
define('USER', 'PUT_YOUR_USERNAME'); 
define('PASSWORD', 'PUT_YOUR_PASSWORD'); 


//Connexion à la base de données avec gestion des exceptions
try{
	$db = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);
} catch(PDOException $e) {
	die("Erreur: ".$e->getMessage());
}
?>