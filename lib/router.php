<?php

function parseUrl($url)
{
	$result = [
		'app' => 'site',
		'file' => 'index',
		'action' => 'index',
		'params' => []
	];

	$parts = array_filter(explode('/', trim($url, " \t\n\r\0\x0B/")));

	if ( empty($parts) ) {
		return $result;
	}

	if ( $parts[0] == 'admin' ) {
		$result['app'] = array_shift($parts);
	}

	if ( $parts ) {
		$result['file'] = array_shift($parts);
	}

	if ( $parts ) {
		$result['action'] = array_shift($parts);
	}

	$result['params'] = $parts;

	return $result;
}
