<?php

$dsn = "mysql:host=localhost;dbname=hoteldb";
$user = "hoteldb_admin";
$password = "admin123";


$hotel = null;
try {

	$options = array(HOTELS::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");

	$pdo = new HOTELS($dsn, $user, $password, $options);
	$pdo->setAttribute(HOTELS::ATTR_ERRMODE,HOTELS::ERRMODE_EXCEPTION);
} catch (HOTELSException $e) {



	echo $e->getMessage();
}
?>