<?php
	$servername = '127.0.0.1';
	$username = 'root';
	$password = '';
	$dbname = 'collectx';
	$port = 3307;

	// Connecting to the database.
	$conn = new PDO("mysql:host=$servername;port=3307;dbname=collectx", $username, $password);
	try {
		// Set the PDO error mode to exception.
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (\PDOException $e) {
		$error_message = $e->getMessage();
	}

?>
