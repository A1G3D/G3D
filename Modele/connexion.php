<?php
    $dbname = "app_exemple";
    $host='localhost';
    $user='root';
    $pass='';

    try {
    $connect = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
	}
    catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}

    $connect->query("SET NAMES UTF8");
?>