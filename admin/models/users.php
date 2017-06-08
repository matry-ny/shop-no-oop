<?php

function authorize($name, $password)
{
	$user = getUserByName($name);

    if (empty($user)) {
        $_SESSION['error'] = 'User is undefined';
        return false;
    }

    $isCorrectHash = $user['password'] === md5($password);
    if (!$isCorrectHash) {
        $_SESSION['error'] = 'Password is incorrect';
        return false;
    }

    $authHash = md5(mt_rand());

    $_SESSION['user'] = $user;
    $_SESSION['user']['auth_hash'] = $authHash;

    setcookie('auth_hash', $authHash, time()+3600*24, '/');

    return true;
}

function getUserByName($name)
{
	$db = getDb();

	$query = 'SELECT u.*, r.alias AS role FROM users AS u 
			INNER JOIN roles AS r
			ON u.role_id = r.id WHERE u.name = "' . $name . '" LIMIT 1';

	$result = mysqli_query($db, $query);

	return mysqli_fetch_assoc($result);
}
