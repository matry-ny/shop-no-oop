<?php

if ( !defined('BASE_PATH') ) {
	define('BASE_PATH', dirname(__DIR__));
}

require_once BASE_PATH . '/lib/db.php';

$db = getDb();

$migrations = array_filter(scandir(BASE_PATH.'/migrations'), function($item) {
	return !in_array($item, ['.', '..']);
});

foreach ($migrations as $migration) {
	echo $migration . '...';
	require_once BASE_PATH . '/migrations/' . $migration;
	echo 'OK!' . PHP_EOL;
}
