<?php

function getDb($charset = 'utf8')
{
	$dbConfig = require_once BASE_PATH . '/configs/db.php';

	$connection = mysqli_connect($dbConfig['server'], $dbConfig['user'], 
					$dbConfig['password'], $dbConfig['db']);
	if ( mysqli_connect_errno() ) {
		die("Failed to connect to MySQL: " . mysqli_connect_error());
	}

	mysqli_set_charset($connection, $charset);

    return $connection;
}
