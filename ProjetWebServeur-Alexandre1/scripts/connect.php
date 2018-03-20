<?php

function db_connect()
{

	try
	{
	$bd = new PDO('mysql:host=localhost;dbname=tripmylife;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}

	return $bd;
	
}

?>