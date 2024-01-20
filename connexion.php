<?php
	try
	{
		$bdd= new PDO('mysql:host=localhost;dbname=bnh_system','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
		// echo "<strong> connexion reussi </strong>";
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage()); 

	}
	
?>