<?php

function redirect($url)
{
	header('Location: ' . $url);
	exit;
}

function loadModel($controller)
{
	$model = str_replace('controllers', 'models', $controller);
	require_once $model;
}