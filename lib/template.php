<?php

function render($layout, $data = [])
{
	extract($data);

	ob_start();
	include $layout;
	echo ob_get_clean();
}

function renderSitePage($data = [])
{
	!isset($data['subview']) || $data['subview'] = SITE_VIEW_PATH . '/' . $data['subview'] . '.php';
	render(SITE_VIEW_PATH.'/layout.php', $data);
}

function renderAdminPage($data = [])
{
	!isset($data['subview']) || $data['subview'] = ADMIN_VIEW_PATH . '/' . $data['subview'] . '.php';
	render(ADMIN_VIEW_PATH.'/layout.php', $data);
}