<?php

$prototype = "http" . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "s" : "") . "://";
$server = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];

define('BASE_URL', $prototype . $server);
define('ADMIN_URL', BASE_URL.'/admin');

define('SITE_VIEW_PATH', BASE_PATH.'/site/views');
define('ADMIN_VIEW_PATH', BASE_PATH.'/admin/views');

require_once BASE_PATH . '/lib/router.php';
require_once BASE_PATH . '/lib/helper.php';
require_once BASE_PATH . '/lib/db.php';

function initShop($url)
{
	$parts = parseUrl($url);
	$route = BASE_PATH . '/' . $parts['app'] . '/controllers/' . $parts['file'] . '.php';

	file_exists($route) || redirect(ADMIN_URL.'/404');
	
	require_once $route;
	require_once BASE_PATH . '/lib/auth.php';

	$authUrl = '/admin/users/login';
	if ( $parts['app'] == 'admin' ) {
		if ( !isAdmin() && $url != $authUrl ) {
			redirect($authUrl);
		}
	}
	
	function_exists($parts['action']) || redirect(ADMIN_URL.'/404');
	require_once BASE_PATH . '/lib/template.php';
	call_user_func_array($parts['action'], $parts['params']);
}