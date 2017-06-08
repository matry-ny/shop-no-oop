<?php

function index()
{
	$data = [];


	$data['subview'] = 'users/index';
	renderAdminPage($data);
}

function login()
{
	if ( isset($_POST['login']) && isset($_POST['password']) ) {
		$login = trim($_POST['login']);
		$password = trim($_POST['password']);

		loadModel(__FILE__);

		if ( authorize($_POST['login'], $_POST['password']) ) {
			redirect('/admin');
		}
	}
	
	echo render(ADMIN_VIEW_PATH.'/users/login.php');
}

function logout()
{
	unset($_SESSION['user']);
	unset($_SESSION['error']);
	setcookie('auth_hash', $authHash, time()-3600, '/');
	redirect('users/login');
}
