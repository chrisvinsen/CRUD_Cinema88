<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'uts');

	// define('DB_SERVER', 'localhost');
	// define('DB_USERNAME', 'id12932868_uts');
	// define('DB_PASSWORD', 'christiantovinsen28917');
	// define('DB_NAME', 'id12932868_uts');
	 
	try{
	    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
	    // Set the PDO error mode to exception
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
	    die("ERROR: Could not connect. " . $e->getMessage());
	}
?>